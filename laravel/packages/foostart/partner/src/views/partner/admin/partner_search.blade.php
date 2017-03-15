
<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i><?php echo trans('partner::partner_admin.page_search') ?></h3>
    </div>
    <div class="panel-body">

        {!! Form::open(['route' => 'admin_partner','method' => 'get']) !!}

        <!--TITLE-->
        <div class="form-group">
            {!! Form::label('partner_link', trans('partner::partner_admin.partner_link_label')) !!}
            {!! Form::text('partner_link', @$params['partner_link'], ['class' => 'form-control', 'placeholder' => trans('partner::partner_admin.partner_link_placeholder')]) !!}
            
        </div>
        <!--/END TITLE-->

        {!! Form::submit(trans('partner::partner_admin.search').'', ["class" => "btn btn-info pull-right"]) !!}
        {!! Form::close() !!}
    </div>
</div>


