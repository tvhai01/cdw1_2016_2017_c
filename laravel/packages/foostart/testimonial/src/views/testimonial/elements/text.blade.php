<!-- SAMPLE NAME -->
<head>
    <script src='//cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 500,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            content_css: '//www.tinymce.com/css/codepen.min.css'
        });

    </script>
</head>
<div class="form-group">
    <?php $testimonial_name = $request->get('testimonial_titlename') ? $request->get('testimonial_name') : @$testimonial->testimonial_name ?>
    {!! Form::label($name, trans('testimonial::testimonial_admin.name').':') !!}
    {!! Form::text($name, $testimonial_name, ['class' => 'form-control', 'placeholder' => trans('testimonial::testimonial_admin.name').'']) !!}
    <!-- MAIL -->
    <?php $testimonial_feedback_1 = $request->get('testimonial_feedback_1') ? $request->get('testimonial_feedback_1') : @$testimonial->testimonial_feedback_1 ?>
    {!! Form::label($feedback_1, trans('testimonial::testimonial_admin.feedback_1').':') !!}
    {!! Form::textarea($feedback_1, $testimonial_feedback_1, ['class' => 'form-control', 'placeholder' => trans('testimonial::testimonial_admin.feedback_1').'']) !!}
    <!-- SUBJECT -->
    <?php $testimonial_img_1 = $request->get('testimonial_img_1') ? $request->get('testimonial_img_1') : @$testimonial->testimonial_img_1 ?>
    {!! Form::label($img_1, trans('testimonial::testimonial_admin.img_1').':') !!}
    {!! Form::text($img_1, $testimonial_img_1, ['class' => 'form-control', 'placeholder' => trans('testimonial::testimonial_admin.img_1').'']) !!}
    <!-- MESSAGE -->



</div>
<!-- /SAMPLE NAME -->