

<?php $__env->startSection('breadcrumb'); ?>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(URL::to('home')); ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?php echo e(url('primary-info')); ?>">Primary Info</a></li>
            <li class="active">Edit</li>
        </ol>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
    .form-group{overflow:hidden}
</style>
<div class="content">
    <div class="row">
            <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Primary Information</h3>

            </div>




            <div class="col-md-10 col-md-offset-1">
                <div class="row">



                    <?php echo Form::open(array('route' =>['primary-info.update',$data->id],'method'=>'PUT','class'=>'form-horizontals','files'=>true)); ?>


                    <div class="box-body">

                        <div class="form-group row">
                            <label for="username3" class="col-sm-2 col-form-label">Organization Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo e($data->company_name); ?>" name="company_name" placeholder="company_name">
                            </div>
                        </div>

                        <div class="form-group row hidden">
                            <label for="username3" class="col-sm-2 col-form-label">Organization Name Bangla</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?php echo e($data->company_name_ban); ?>" name="company_name_ban" placeholder="company_name_ban">
                            </div>
                        </div>


                        <input type="hidden" value="<?php echo e($data->id); ?>" name="id"/>

                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">

                                <textarea class="form-control" name="address" placeholder="address" ><?php echo $data->address;?></textarea>

                            </div>
                        </div>

                        <div class="form-group row hidden" >
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Address Bangla</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address_ban" placeholder="address bangla" ><?php echo $data->address_ban;?></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile No</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="mobile_no" placeholder="mobile_no" value="<?php echo e($data->mobile_no); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Admission Form Fee</label>
                            <div class="col-sm-10">
                                <input type="number" min="0" class="form-control"  name="form_fee" placeholder="Admission Form Fee" value="<?php echo e($data->form_fee); ?>">
                            </div>
                        </div>
                        <div class="form-group row hidden">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile No Bangla</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"  name="mobile_no_ban" placeholder="mobile_no_ban" value="<?php echo e($data->mobile_no_ban); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control"  name="email" placeholder="email" value="<?php echo e($data->email); ?>">
                            </div>
                        </div>

                        <div class="form-group row hidden">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Language Set</label>
                            <div class="col-sm-10">


                                <?php echo e(Form::select('language_name', array('1' => 'English', '2' => 'Bangla'),$data->language_name, ['class' => 'form-control'])); ?>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword4" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control textarea" name="description" placeholder="description" value="" >
                                    <?php echo $data->description;?>
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row hidden">
                            <label for="inputPassword4" class="col-sm-2 col-form-label">Description Bangla</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control textarea" name="description_ban" placeholder="description_ban" value="" >
                                    <?php echo $data->description_ban;?>
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPasswdford4" class="col-sm-2 col-form-label">Meta Description</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="meta_description" placeholder="meta Description" value="" >
                                    <?php echo $data->meta_description;?>
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row hidden">
                            <label for="inputPasswdford4" class="col-sm-2 col-form-label">Meta Description Bangla</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="meta_description_ban" placeholder="meta Description_ban" value="" >
                                    <?php echo $data->meta_description_ban;?>
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="slide_photo" class="col-md-2 control-label">Logo and Favicon </label>
                            <div class="col-md-6">
                                <label class="slide_upload" for="file">
                                    <!--  -->

                                    <?php if($data->logo!=null): ?>
                                        <img id="image_load" src='<?php echo e(asset("$data->logo")); ?>' class="img-responsive" style="width: 200px;max-height: 80px;">
                                    <?php else: ?>
                                        <img id="image_load" src="<?php echo e(asset('images/default/photo.png')); ?>" style=" width: 200px;max-height: 80px;">
                                    <?php endif; ?>

                                </label>

                                <?php echo e(Form::file('logo',array('id'=>'file','style'=>'display:none','onchange'=>"photoLoad(this,this.id)"))); ?>

                            <p> Click on photo for change. </p>
                            </div>


                            <div class="col-md-4">
                                <label class="slide_upload" for="file2">
                                    <!--  -->

                                    <?php if($data->logo!=null): ?>
                                        <img id="image_load2" src='<?php echo e(asset("$data->favicon")); ?>' class="img-responsive" style="width: 50px;height: 50px;">
                                    <?php else: ?>
                                        <img id="image_load2" src="<?php echo e(asset('images/default/photo.png')); ?>" style="width: 50px;max-height: 50px;">
                                    <?php endif; ?>

                                </label>

                                <?php echo e(Form::file('favicon',array('id'=>'file2','style'=>'display:none','onchange'=>"photoLoad(this,this.id)"))); ?>


                            </div>
                        </div>

                        <div class="form-group hidden">
                            <label for="slide_photo" class="col-md-2 control-label">Logo Bangla</label>
                            <div class="col-md-8">
                                <label class="slide_upload" for="files">
                                    <!--  -->

                                    <?php if($data->logo_ban!=null): ?>
                                        <img id="image_load3" src='<?php echo e(asset("$data->logo_ban")); ?>' class="img-responsive" style="    width: 200px;height: 80px;">
                                    <?php else: ?>
                                        <img id="image_load3" src="<?php echo e(asset('images/default/photo.png')); ?>" style="    width: 200px;height: 80px;">
                                    <?php endif; ?>

                                </label>

                                <?php echo e(Form::file('logo_ban',array('id'=>'files','style'=>'display:none','onchange'=>"photoLoad(this,this.id)"))); ?>


                            </div>
                        </div>

                         <div class="form-group row  <?php echo e($errors->has('map_embed') ? 'has-error' : ''); ?>">
                        <?php echo e(Form::label('map_embed', 'Google Map Embed', array('class' => 'col-md-2 control-label'))); ?>

                        <div class="col-md-10">
                            <?php echo e(Form::textArea('map_embed',$data->map_embed,array('class'=>'form-control','placeholder'=>'Google Map Embed','rows'=>'5'))); ?>

                            <?php if($errors->has('map_embed')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('map_embed')); ?></strong>
                                    </span>
                                <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?php echo e(Form::label('Google Map', 'Google Map', array('class' => 'col-md-2 control-label'))); ?>

                        <div class="col-md-10">
                            <iframe src="<?php echo e($data->map_embed); ?>" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>


                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Submit')); ?>

                                </button>
                            </div>
                        </div>

                    </div>

                    <?php echo Form::close(); ?>



                </div>
            </div>
        </div>
    </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <script type="text/javascript">


        function photoLoad(input,image_load) {
            var target_image='#'+$('#'+image_load).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function photoLoad(input,image_load2) {
            var target_image='#'+$('#'+image_load2).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function photoLoad(input,image_load3) {
            var target_image='#'+$('#'+image_load3).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }




    </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/primary_info/primaryinfo.blade.php ENDPATH**/ ?>