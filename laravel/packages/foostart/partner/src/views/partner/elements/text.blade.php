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
    <?php $partner_link = $request->get('partner_titlelink') ? $request->get('partner_link') : @$partner->partner_link ?>
    {!! Form::label($link, trans('partner::partner_admin.link').':') !!}
    {!! Form::textarea($link, $partner_link, ['class' => 'form-control', 'placeholder' => trans('partner::partner_admin.link').'']) !!}
    
    <?php $partner_img = $request->get('partner_titleimg') ? $request->get('partner_img') : @$partner->partner_img ?>
    {!! Form::label($img, trans('partner::partner_admin.img').':') !!}
    {!! Form::text($img, $partner_img, ['class' => 'form-control', 'placeholder' => trans('partner::partner_admin.img').'']) !!}   
</div>
<!-- /SAMPLE NAME -->