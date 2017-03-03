@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: {{ trans('sample::sample_admin.sample.page_edit') }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        {!! !empty($sample_category->sample_category_id) ? '<i class="fa fa-pencil"></i>'.trans('sample::sample_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('sample::sample_admin.form_add') !!}
                    </h3>
                </div>

                {{-- model general errors from the form --}}
                @if($errors->has('sample_category_name') )
                    <div class="alert alert-danger">{!! $errors->first('sample_category_name') !!}</div>
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
                            <h4>{!! trans('sample::sample_admin.form_heading') !!}</h4>
                            {!! Form::open(['route'=>['admin_sample_category.post', 'id' => @$sample_category->sample_category_id],  'files'=>true, 'method' => 'post'])  !!}


                            <!-- SAMPLE NAME -->
                            @include('sample::sample.admin.sample_category.menutask', ['name' => 'sample_category_name'])
                            <!-- /SAMPLE NAME -->



                            {!! Form::hidden('id',@$sample->sample_id) !!}


                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('admin_sample.delete',['id' => @$sample->id, '_token' => csrf_token()]) !!}"
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

        <div class='col-md-4'>
            @include('sample::sample.admin.sample_category.sample_category_search')
        </div>

    </div>
</div>
@stop