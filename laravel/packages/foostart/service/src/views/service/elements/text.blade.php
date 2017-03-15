<head>
    <script src='//cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: 'textarea', // change this value according to your HTML
            plugin: 'a_tinymce_plugin',
            a_plugin_option: true,
            a_configuration_option: 400
        });

    </script>
</head>
<!-- SAMPLE NAME -->
<div class="form-group">
    <!--img-->
    <?php $service_img = $request->get('service_img') ? $request->get('service_img') : @$service->service_img ?>
    {!! Form::label($img, trans('service::service_admin.img').':') !!}
    {!! Form::text($img, $service_img, ['class' => 'form-control', 'placeholder' => trans('service::service_admin.img').'']) !!}
    <!--Title-->
    <?php $service_title = $request->get('service_title') ? $request->get('service_title') : @$service->service_title ?>
    {!! Form::label($title, trans('service::service_admin.title').':') !!}
    {!! Form::text($title, $service_title, ['class' => 'form-control', 'placeholder' => trans('service::service_admin.title').'']) !!}
     <!--Description_1-->
    <?php $service_description_1 = $request->get('service_description_1') ? $request->get('service_description_1') : @$service->service_description_1 ?>
    {!! Form::label($description_1, trans('service::service_admin.description_1').':') !!}
    {!! Form::textarea($description_1, $service_description_1, ['class' => 'form-control', 'placeholder' => trans('service::service_admin.description_1').'']) !!}
    <!--Img_2-->
    <?php $service_img_2 = $request->get('service_img_2') ? $request->get('service_img_2') : @$service->service_img_2 ?>
    {!! Form::label($img_2, trans('service::service_admin.img_2').':') !!}
    {!! Form::text($img_2, $service_img_2, ['class' => 'form-control', 'placeholder' => trans('service::service_admin.img_2').'']) !!}
    <!--Description_2-->
     <?php $service_description_2 = $request->get('service_description_2') ? $request->get('service_description_2') : @$service->service_description_2 ?>
    {!! Form::label($description_2, trans('service::service_admin.description_2').':') !!}
    {!! Form::textarea($description_2, $service_description_2, ['class' => 'form-control', 'placeholder' => trans('service::service_admin.description_2').'']) !!}
</div>
<!-- /SAMPLE NAME -->