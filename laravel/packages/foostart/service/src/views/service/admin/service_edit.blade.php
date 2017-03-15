@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: {{ trans('service::service_admin.page_edit') }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="col-md-10">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        {!! !empty($service->service_id) ? '<i class="fa fa-pencil"></i>'.trans('service::service_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('service::service_admin.form_add') !!}
                    </h3>
                </div>

                {{-- model general errors from the form --}}
                @if($errors->has('service_title') )
                    <div class="alert alert-danger">{!! $errors->first('service_title') !!}</div>
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
                            <h4>{!! trans('service::service_admin.form_heading') !!}</h4>
                            {!! Form::open(['route'=>['admin_service.post', 'id' => @$service->service_id],  'files'=>true, 'method' => 'post'])  !!}


                            <!-- SAMPLE NAME TEXT-->
                            @include('service::service.elements.text', ['img' => 'service_img', 'title' => 'service_title', 'description_1' => 'service_description_1', 'img_2' =>'service_img_2', 'description_2' => 'service_description_2' ])
                            
                            
                            <!-- /END SAMPLE NAME TEXT -->
                            {!! Form::hidden('id',@$service->service_id) !!}

                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('admin_service.delete',['id' => @$service->id, '_token' => csrf_token()]) !!}"
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

        <div class='col-md-2'>
            @include('service::service.admin.service_search')
        </div>

    </div>
</div>
@stop