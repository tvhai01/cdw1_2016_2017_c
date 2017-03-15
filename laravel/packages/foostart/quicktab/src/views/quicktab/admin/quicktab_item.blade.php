
@if( ! $quicktabs->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'>{{ trans('quicktab::quicktab_admin.order') }}</td>
            <th style='width:10%'>ID</th>
            <th style='width:20%'>Title 1</th>
            <th style='width:50%'>Description 1</th>
            <th style='width:20%'>Title 2</th>
            <th style='width:50%'>Description 2</th>
            <th style='width:20%'>{{ trans('quicktab::quicktab_admin.operations') }}</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $quicktabs->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($quicktabs as $quicktab)
        <tr>
            <td>
                <?php echo $counter; $counter++ ?>
            </td>
            <td>{!! $quicktab->quicktab_id !!}</td>
            <td>{!! $quicktab->quicktab_title_1 !!}</td>
            <td>{!! $quicktab->quicktab_description_1 !!}</td>
            <td>{!! $quicktab->quicktab_title_2 !!}</td>
            <td>{!! $quicktab->quicktab_description_2 !!}</td>
            <td>
                <a href="{!! URL::route('admin_quicktab.edit', ['id' => $quicktab->quicktab_id]) !!}"><i class="fa fa-edit fa-2x"></i></a>
                <a href="{!! URL::route('admin_quicktab.delete',['id' =>  $quicktab->quicktab_id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <span class="clearfix"></span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
 <span class="text-warning">
	<h5>
		{{ trans('quicktab::quicktab_admin.message_find_failed') }}
	</h5>
 </span>
@endif
<div class="paginator">
    {!! $quicktabs->appends($request->except(['page']) )->render() !!}
</div>