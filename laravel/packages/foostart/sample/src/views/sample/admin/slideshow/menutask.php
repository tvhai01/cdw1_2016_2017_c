<!-- SLIDESHOW NAME -->
                            <div class="form-group">
                                <?php $slideshow_title = $request->get('slideshow_title')?$request->get('slideshow_title'):@$slideshow->slideshow_title ?>
                                {!! Form::label('slideshow_title', trans('sample::slideshow_admin.name').':') !!}
                                {!! Form::text('slideshow_title', $slideshow_title, ['class' => 'form-control', 'placeholder' => trans('sample::slideshow_admin.name').'']) !!}
                            </div>
                            <!-- /slideshow NAME -->