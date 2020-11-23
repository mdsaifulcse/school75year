
<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('home')); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Profile Update</a></li>

    </ol>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-sm-12">
            <div class="box">

                <div class="box-header with-border">
                    <h3 class="box-title">My Profile </h3>
                    <div class="card-btn pull-right">
                        <a class="btn btn-xs btn-warning" href="<?php echo e(URL::to('user-profile/password')); ?>"> Change Password </a>
                    </div>

                </div>
                <div class="box-block">
                    <div class="j-wrapper j-wrapper-640">
                        <?php echo Form::open(['route'=>'user-profile.store','method'=>'POST','class'=>'j-pro','id'=>'j-pro','files'=>'true']); ?>

                            <div class="j-content">
                                <!-- start name -->
                                <div class="j-unit <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                                    <label class="j-label">Your name</label>
                                    <div class="j-input">
                                        <label class="j-icon-right" for="name">
                                            <i class="fa fa-user"></i>
                                        </label>
                                        <input type="text" value="<?php echo e($data->name); ?>" required id="name" name="name">
                                        <span class="j-tooltip j-tooltip-right-top">Your Full Name</span>
                                        <?php if($errors->has('name')): ?>
                                            <span class="help-block">
                                            <small><?php echo e($errors->first('name')); ?></small>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <!-- end name -->
                                <!-- start email phone -->
                                <div class="j-row">
                                    <div class="j-span6 j-unit <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                                        <label class="j-label">Your email</label>
                                        <div class="j-input">
                                            <label class="j-icon-right" for="email">
                                                <i class="fa fa-envelope"></i>
                                            </label>
                                            <input type="email" value="<?php echo e($data->email); ?>" required id="email" readonly name="email">
                                            <span class="j-tooltip j-tooltip-right-top">Email Address</span>
                                            <?php if($errors->has('email')): ?>
                                                <span class="help-block">
                                                    <small><?php echo e($errors->first('email')); ?></small>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="j-span6 j-unit <?php echo e($errors->has('phone_number') ? 'has-error' : ''); ?>">
                                        <label class="j-label">Phone/Mobile</label>
                                        <div class="j-input">
                                            <label class="j-icon-right" for="phone">
                                                <i class="fa fa-phone"></i>
                                            </label>
                                            <input type="text" value="<?php echo e($data->mobile_no); ?>" id="phone" name="mobile_no" readonly>
                                            <span class="j-tooltip j-tooltip-right-top">Mobile Number</span>
                                        </div>
                                    </div>
                                </div>



                                <div class="j-unit">
                                    <label class="j-label">Your photo</label>
                                    <div class="j-input">
                                        <label class="slide_upload profile-image" for="file">
                                            <!--  -->

                                            <?php if($data->image!=null): ?>
                                                <img id="image_load" src='<?php echo e(asset("$data->image")); ?>' class="img-responsive" >
                                            <?php else: ?>
                                                <img id="image_load" src="<?php echo e(asset('images/default/photo.png')); ?>" >
                                            <?php endif; ?>

                                        </label>

                                        <?php echo e(Form::file('image',array('id'=>'file','style'=>'display:none','onchange'=>"photoLoad(this,this.id)"))); ?>

                                    </div>
                                </div>


                            </div>
                            <!-- end /.content -->
                            <div class="j-footer">
                                <?php if(Session::has('success')): ?>
                               <button type="button" class="btn btn-danger" onclick="window.history.go(-2)">Cancel</button>
                               <?php else: ?> 
                               <button type="button" class="btn btn-danger" onclick="window.history.go(-1)">Cancel</button>

                               <?php endif; ?>
                                <button type="submit" class="btn btn-primary pull-right">Update</button>
                            </div>
                            <!-- end /.footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/primary_info/profile/index.blade.php ENDPATH**/ ?>