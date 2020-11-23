

<?php $__env->startSection('breadcrumb'); ?>

    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('home')); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="<?php echo e(url('all-users')); ?>">Admin</a></li>
        <li class="active">Create</li>
    </ol>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New Admin</h3>

                        <div class="card-btn pull-right">
                            <a href="<?php echo e(URL::to('all-users')); ?>"><button type="button" class="btn btn-success btn-xs">All Admin</button></a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-8 col-md-offset-2" style="margin-top: 20px;">
                            <div class="row">
                                <?php echo Form::open(['route'=>['all-users.update',$data->id],'method'=>'PUT','role'=>'form','data-toggle'=>'validator','class'=>'form-horizontal','files'=>'true']); ?>


                                <div class="form-group row">
                                    <label for="name" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Full Name')); ?></label>

                                    <div class="col-md-8">
                                        <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e($data->name); ?>" required autofocus>

                                        <?php if($errors->has('name')): ?>
                                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="mobile_no" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Mobile Number')); ?></label>

                                    <div class="col-md-8">
                                        <input id="mobile_no" type="Number" class="form-control<?php echo e($errors->has('mobile_no') ? ' is-invalid' : ''); ?>" name="mobile_no" min="0" value="<?php echo e($data->mobile_no); ?>" readonly required>

                                        <?php if($errors->has('mobile_no')): ?>
                                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('mobile_no')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-2 col-form-label text-md-right"><?php echo e(__('Address')); ?></label>

                                    <div class="col-md-8">
                                        <textarea name="address" class="form-control" rows="2" required><?php echo $data->address?></textarea>

                                        <?php if($errors->has('address')): ?>
                                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('address')); ?></strong>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-3">
                                        <label class="control-label">Batch</label>
                                        <?php echo e(Form::select('batch_id',$batches,isset($data->batch_id)?$data->batch_id:'',['class'=>'form-control select','required'=>true, 'placeholder'=>'-Select batch-'])); ?>

                                        <?php if($errors->has('batch_id')): ?>
                                            <span class="help-block">
                                    <small><?php echo e($errors->first('batch_id')); ?></small>
                                </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="control-label">Village</label>
                                        <?php echo e(Form::select('village_id',$village,isset($data->village_id)?$data->village_id:'',['class'=>'form-control select2','required'=>true,'placeholder'=>'-Search Village-'])); ?>

                                        <?php if($errors->has('village_id')): ?>
                                            <span class="help-block">
                                    <small><?php echo e($errors->first('village_id')); ?></small>
                                </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-3 no-padding">
                                        <label class="control-label">Role</label>
                                        <?php echo e(Form::select('role_id',$roles,$data->role_id,['class'=>'form-control select','required','placeholder'=>'-Select Role-'])); ?>

                                        <?php if($errors->has('role_id')): ?>
                                            <span class="help-block">
                                        <small><?php echo e($errors->first('role_id')); ?></small>
                                    </span>
                                        <?php endif; ?>
                                    </div>

                                </div> <!--end row-->

                                <div class="form-group ">
                                    <label for="slide_photo" class="col-md-2 control-label"> Photo</label>
                                    <div class="col-md-8">
                                        <label class="slide_upload profile-image" for="file">
                                            <?php if($data->image!=''): ?>

                                            <img id="image_load" src="<?php echo e(asset($data->image)); ?>">
                                                <?php else: ?>
                                                <img id="image_load" src="<?php echo e(asset('images/default/photo.png')); ?>">
                                            <?php endif; ?>
                                        </label>

                                        <input id="file" style="display:none" name="image" type="file" onchange="photoLoad(this,this.id)" accept="image/*">

                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                                        <button type="submit" class="btn btn-primary">
                                            <?php echo e(__('Register')); ?>

                                        </button>
                                    </div>
                                </div>
                                <?php echo e(Form::close()); ?>


                            </div>
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


    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/primary_info/user/edit.blade.php ENDPATH**/ ?>