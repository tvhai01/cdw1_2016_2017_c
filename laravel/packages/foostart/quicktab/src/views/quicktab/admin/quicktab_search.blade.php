
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i><?php echo trans('quicktab::quicktab_admin.page_search') ?></h3>
    </div>
    <div class="panel-body">

        {!! Form::open(['route' => 'admin_quicktab','method' => 'get']) !!}

        <!--TITLE-->
        <div class="form-group">
            {!! Form::label('quicktab_title_1', trans('quicktab::quicktab_admin.quicktab_name_label')) !!}
            {!! Form::text('quicktab_title_1', @$params['quicktab_title'], ['class' => 'form-control', 'placeholder' => trans('quicktab::quicktab_admin.quicktab_name_placeholder')]) !!}
        </div>
        <!--/END TITLE-->

        {!! Form::submit(trans('quicktab::quicktab_admin.search').'', ["class" => "btn btn-info pull-right"]) !!}
        {!! Form::close() !!}
    </div>
</div>


