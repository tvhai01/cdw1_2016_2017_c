
@if( ! $testimonials->isEmpty() )
<table class="table table-hover">
    <thead>
        <tr>
            <td style='width:5%'>{{ trans('testimonial::testimonial_admin.order') }}</td>
            <th style='width:10%'>ID</th>
            <th style='width:30%'>Name</th>
            <th style='width:20%'>Feedback</th>
            <th style='width:20%'>Images</th>
            <th style='width:20%'>{{ trans('testimonial::testimonial_admin.operations') }}</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nav = $testimonials->toArray();
            $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
        ?>
        @foreach($testimonials as $testimonial)
        <tr>
            <td>
                <?php echo $counter; $counter++ ?>
            </td>
            <td>{!! $testimonial->testimonial_id !!}</td>
            <td>{!! $testimonial->testimonial_name !!}</td>
            <td>{!! $testimonial->testimonial_feedback_1 !!}</td>
            <td>{!! $testimonial->testimonial_img_1 !!}</td>
           
            <td>
                <a href="{!! URL::route('admin_testimonial.edit', ['id' => $testimonial->testimonial_id]) !!}"><i class="fa fa-edit fa-2x"></i></a>
                <a href="{!! URL::route('admin_testimonial.delete',['id' =>  $testimonial->testimonial_id, '_token' => csrf_token()]) !!}" class="margin-left-5 delete"><i class="fa fa-trash-o fa-2x"></i></a>
                <span class="clearfix"></span>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
 <span class="text-warning">
	<h5>
		{{ trans('testimonial::testimonial_admin.message_find_failed') }}
	</h5>
 </span>
@endif
<div class="paginator">
    {!! $testimonials->appends($request->except(['page']) )->render() !!}
</div>