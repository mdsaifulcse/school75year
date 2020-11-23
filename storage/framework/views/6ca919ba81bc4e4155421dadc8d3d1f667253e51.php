
<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('home')); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#">Password Change</a></li>

    </ol>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-sm-12">
            <div class="box">
                <div class="box-header with-border">
                    <h5 class="box-title">Password Change</h5>
                    <div class="card-btn pull-right">
                            <a class="btn btn-xs btn-warning" href="<?php echo e(URL::to('user-profile')); ?>"> Profile Update </a>
                    </div>
                </div>
                <div class="card-block">
                    <div class="j-wrapper j-wrapper-640">
                        <?php echo Form::open(['route'=>['user-profile.update',Auth::user()->id],'method'=>'PUT','class'=>'j-pro','id'=>'j-pro']); ?>

                            <div class="j-content">

                                <!-- end name -->
                                <!-- start email phone -->
                                <div class="j-row">
                                    <div class="j-span6 j-unit  <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                                        <label class="j-label">New password</label>
                                        <div class="j-input">
                                            <label class="j-icon-right" for="email">
                                                <i class="fa fa-key"></i>
                                            </label>
                                            <input type="password" required id="email" name="password">
                                            <span class="j-tooltip j-tooltip-right-top">New password</span>
                                            <?php if($errors->has('password')): ?>
                                                <span class="help-block">
                                                    <small><?php echo e($errors->first('password')); ?></small>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="j-span6 j-unit">
                                        <label class="j-label">Confirm Password</label>
                                        <div class="j-input">
                                            <label class="j-icon-right" for="phone">
                                                <i class="fa fa-key"></i>
                                            </label>
                                            <input type="password" required id="phone" name="password_confirmation">
                                            <span class="j-tooltip j-tooltip-right-top">Confirm Password</span>
                                        </div>
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
                                <button type="submit" class="btn btn-primary pull-right">Change</button>
                            </div>
                            <!-- end /.footer -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/primary_info/profile/password.blade.php ENDPATH**/ ?>