<!-- SAMPLE NAME -->
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
<div class="form-group">
    <?php $contact_name = $request->get('contact_titlename') ? $request->get('contact_name') : @$contact->contact_name ?>
    {!! Form::label($name, trans('contact::contact_admin.name').':') !!}
    {!! Form::text($name, $contact_name, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.name').'']) !!}
    <!-- MAIL -->
     <?php $contact_mail = $request->get('contact_mail') ? $request->get('contact_mail') : @$contact->contact_mail ?>
    {!! Form::label($mail, trans('contact::contact_admin.mail').':') !!}
    {!! Form::text($mail, $contact_mail, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.mail').'']) !!}
     <!-- SUBJECT -->
     <?php $contact_subject = $request->get('contact_subject') ? $request->get('contact_subject') : @$contact->contact_subject ?>
    {!! Form::label($subject, trans('contact::contact_admin.subject').':') !!}
    {!! Form::text($subject, $contact_subject, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.subject').'']) !!}
    <!-- MESSAGE -->
     <?php $contact_message = $request->get('contact_message') ? $request->get('contact_message') : @$contact->contact_message ?>
    {!! Form::label($message, trans('contact::contact_admin.message').':') !!}
        {!! Form::textarea($message, $contact_message, ['class' => 'form-control', 'placeholder' => trans('contact::contact_admin.message').'']) !!}


</div>
<!-- /SAMPLE NAME -->