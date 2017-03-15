
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i><?php echo trans('testimonial::testimonial_admin.page_search') ?></h3>
    </div>
    <div class="panel-body">

        {!! Form::open(['route' => 'admin_testimonial','method' => 'get']) !!}

        <!--TITLE-->
        <div class="form-group">
            {!! Form::label('testimonial_name', trans('testimonial::testimonial_admin.testimonial_name_label')) !!}
            {!! Form::text('testimonial_name', @$params['testimonial_name'], ['class' => 'form-control', 'placeholder' => trans('testimonial::testimonial_admin.testimonial_name_placeholder')]) !!}
        </div>
        <!--/END TITLE-->

        {!! Form::submit(trans('testimonial::testimonial_admin.search').'', ["class" => "btn btn-info pull-right"]) !!}
        {!! Form::close() !!}
    </div>
</div>
