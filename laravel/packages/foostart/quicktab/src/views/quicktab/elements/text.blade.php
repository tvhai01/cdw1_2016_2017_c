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
    <?php $quicktab_title_1 = $request->get('quicktab_title_1') ? $request->get('quicktab_title_1') : @$quicktab->quicktab_title_1 ?>
    {!! Form::label($title_1, trans('quicktab::quicktab_admin.title_1').':') !!}
    {!! Form::text($title_1, $quicktab_title_1, ['class' => 'form-control', 'placeholder' => trans('quicktab::quicktab_admin.title_1').'']) !!}
    
    <?php $quicktab_description_1 = $request->get('quicktab_description_1') ? $request->get('quicktab_description_1') : @$quicktab->quicktab_description_1 ?>
    {!! Form::label($description_1, trans('quicktab::quicktab_admin.description_1').':') !!}
    {!! Form::textarea($description_1, $quicktab_description_1, ['class' => 'form-control', 'placeholder' => trans('quicktab::quicktab_admin.description_1').'']) !!}
    
    <?php $quicktab_title_2 = $request->get('quicktab_title_2') ? $request->get('quicktab_title_2') : @$quicktab->quicktab_title_2 ?>
    {!! Form::label($title_2, trans('quicktab::quicktab_admin.title_2').':') !!}
    {!! Form::text($title_2, $quicktab_title_2, ['class' => 'form-control', 'placeholder' => trans('quicktab::quicktab_admin.title_2').'']) !!}
    
    <?php $quicktab_description_2 = $request->get('quicktab_description_2') ? $request->get('quicktab_description_2') : @$quicktab->quicktab_description_2 ?>
    {!! Form::label($description_2, trans('quicktab::quicktab_admin.description_2').':') !!}
    {!! Form::textarea($description_2, $quicktab_description_2, ['class' => 'form-control', 'placeholder' => trans('quicktab::quicktab_admin.description_2').'']) !!}
</div>
<!-- /SAMPLE NAME -->