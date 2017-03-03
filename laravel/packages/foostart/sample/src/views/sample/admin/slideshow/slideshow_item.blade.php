

@if( ! $slideshows->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'>{{ trans('sample::slideshow_admin.order') }}</td>
            <th style='width:10%'>slideshow ID</th>
            <th style='width:50%'>slideshow title</th>
            <th style='width:20%'>{{ trans('sample::slideshow_admin.operations') }}</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $slideshows->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($slideshows as $slideshow)
        <tr>
            <td>
                <?php echo $counter; $counter++ ?>
            </td>
            <td>{!! $slideshow->slideshow_id !!}</td>
            <td>{!! $slideshow->slideshow_title !!}</td>
            <td>{!! $slideshow->slideshow_content !!}</td>
            <td>{!! $slideshow->slideshow_img !!}</td>
            <td>                <!--Méo hiểu admin_sample-->
                <a href="{!! URL::route('admin_slideshow.edit', ['id' => $slideshow->slideshow_id]) !!}"><i class="fa fa-edit fa-2x"></i></a>
                <a href="{!! URL::route('admin_slideshow.delete',['id' =>  $slideshow->slideshow_id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <span class="clearfix"></span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<span class="text-warning"><h5>No results found.</h5></span>
@endif
<div class="paginator">
    {!! $slideshows->appends($request->except(['page']) )->render() !!}
</div>