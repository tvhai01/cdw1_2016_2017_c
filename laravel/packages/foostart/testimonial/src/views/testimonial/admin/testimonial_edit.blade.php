@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: {{ trans('testimonial::testimonial_admin.page_edit') }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">

            <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        {!! !empty($testimonial->testimonial_id) ? '<i class="fa fa-pencil"></i>'.trans('testimonial::testimonial_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('testimonial::testimonial_admin.form_add') !!}
                    </h3>
                </div>

                {{-- model general errors from the form --}}
                @if($errors->has('testimonial_name') )
                    <div class="alert alert-danger">{!! $errors->first('testimonial_name') !!}</div>
                @endif

                @if($errors->has('name_unvalid_length') )
                    <div class="alert alert-danger">{!! $errors->first('name_unvalid_length') !!}</div>
                @endif

                {{-- successful message --}}
                <?php $message = Session::get('message'); ?>
                @if( isset($message) )
                <div class="alert alert-success">{{$message}}</div>
                @endif

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <h4>{!! trans('testimonial::testimonial_admin.form_heading') !!}</h4>
                            {!! Form::open(['route'=>['admin_testimonial.post', 'id' => @$testimonial->testimonial_id],  'files'=>true, 'method' => 'post'])  !!}


                            <!-- SAMPLE NAME TEXT-->
                            @include('testimonial::testimonial.elements.text', ['name' => 'testimonial_name','feedback_1' => 'testimonial_feedback_1','img_1' => 'testimonial_img_1'])
                            <!-- /END SAMPLE NAME TEXT -->
                            {!! Form::hidden('id',@$testimonial->testimonial_id) !!}

                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('admin_testimonial.delete',['id' => @$testimonial->id, '_token' => csrf_token()]) !!}"
                               class="btn btn-danger pull-right margin-left-5 delete">
                                Delete
                            </a>
                            <!-- DELETE BUTTON -->

                            <!-- SAVE BUTTON -->
                            {!! Form::submit('Save', array("class"=>"btn btn-info pull-right ")) !!}
                            <!-- /SAVE BUTTON -->

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop