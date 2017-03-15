@extends('laravel-authentication-acl::admin.layouts.base-2cols')

@section('title')
Admin area: {{ trans('quicktab::quicktab_admin.page_edit') }}
@stop
@section('content')
<div class="row">
    <div class="col-md-12">

        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        {!! !empty($quicktab->quicktab_id) ? '<i class="fa fa-pencil"></i>'.trans('quicktab::quicktab_admin.form_edit') : '<i class="fa fa-users"></i>'.trans('quicktab::quicktab_admin.form_add') !!}
                    </h3>
                </div>

                {{-- model general errors from the form --}}
                @if($errors->has('quicktab_title_1') )
                    <div class="alert alert-danger">{!! $errors->first('quicktab_title_1') !!}</div>
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
                            <h4>{!! trans('quicktab::quicktab_admin.form_heading') !!}</h4>
                            {!! Form::open(['route'=>['admin_quicktab.post', 'id' => @$quicktab->quicktab_id],  'files'=>true, 'method' => 'post'])  !!}


                            <!-- SAMPLE NAME TEXT-->
                            @include('quicktab::quicktab.elements.text', ['title_1' => 'quicktab_title_1','description_1' => 'quicktab_description_1','title_2' => 'quicktab_title_2','description_2' => 'quicktab_description_2'])
                            <!-- /END SAMPLE NAME TEXT -->
                            {!! Form::hidden('id',@$quicktab->quicktab_id) !!}

                            <!-- DELETE BUTTON -->
                            <a href="{!! URL::route('admin_quicktab.delete',['id' => @$quicktab->id, '_token' => csrf_token()]) !!}"
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
            @include('quicktab::quicktab.admin.quicktab_search')
        </div>

    </div>
</div>
@stop