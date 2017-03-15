<!-- SAMPLE NAME -->
<div class="form-group">
    <?php $service_category_title = $request->get('service_title') ? $request->get('service_title') : @$service->service_category_title ?>
    {!! Form::label($name, trans('service::service_admin.name').':') !!}
    {!! Form::text($name, $service_category_title, ['class' => 'form-control', 'placeholder' => trans('service::service_admin.name').'']) !!}
</div>
<!-- /SAMPLE NAME -->