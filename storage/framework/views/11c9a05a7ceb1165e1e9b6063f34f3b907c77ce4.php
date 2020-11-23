

<?php $__env->startSection('breadcrumb'); ?>
   
        <ol class="breadcrumb">
            <li><a href="<?php echo e(URL::to('home')); ?>"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?php echo e(url('all-users')); ?>">Permission</a></li>
            <li class="active">ACL Roles</li>
        </ol>
    

 
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
       <style type="text/css">
        .permission_label{border:1px solid #ddd;cursor: pointer;}
    </style>
    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-info">
                        Permission assign to <?php echo e($role->name); ?>

                        <div class="card-btn pull-right">

                            <a href="<?php echo e(URL::to('acl-role')); ?>" class="btn btn-success btn-sm">Roles</a>

                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo Form::open(array('url' => 'acl-permission-role','class'=>'form-horizontals','method'=>'POST','role'=>'form','data-parsley-validate novalidate')); ?>

                        <input type="hidden" name="role_id" value="<?php echo e($role->id); ?>">
                        <div class="row">


                            <div class="col-md-6">

                                <fieldset>
                                    <legend> Resource Permission  </legend>
                                <div id="treeview_container" class="hummingbird-treeview well h-scroll-large">
                                    <ul id="treeview" class="hummingbird-base">
                                        <?php
                                        $i=0;
                                        ?>
                                        <?php $__currentLoopData = $resource; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            $i++;
                                            $s=0;
                                            ?>
                                            <li><i class="fa <?php if(count($oldPermission[$res])>0): ?> fa-minus <?php else: ?> fa-plus <?php endif; ?>"></i> <label> <input id="node-<?php echo e($i); ?>" data-id="custom-<?php echo e($i); ?>" type="checkbox"> <?php echo e($res); ?> </label>
                                                <ul class="sub-permission" <?php if(count($oldPermission[$res])>0): ?> style="display: block;" <?php endif; ?>>
                                                    <?php $__currentLoopData = $allResource[$res]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php
                                                        $s++;
                                                        if(isset($permissionRole[$data->id])){
                                                            $check = 'checked';
                                                        }else{
                                                            $check ='';
                                                        }
                                                        ?>
                                                        <li><label> <input name="permission_id[]" class="hummingbirdNoParent" id="node-<?php echo e($i); ?>-<?php echo e($s); ?>" value="<?php echo e($data->id); ?>" <?php echo e($check); ?> data-id="custom-<?php echo e($i); ?>-<?php echo e($s); ?>" type="checkbox">  <?php echo e($data->name); ?> </label></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                </div>
                                </fieldset>
                            </div>
                            <div class="col-md-6">

                                <fieldset>
                                    <legend> Normal Permission  </legend>
                                    <ul>
                                        <?php $__currentLoopData = $normalPermission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $normal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                            if(isset($permissionRole[$normal->id])){
                                                $check = 'checked';
                                            }else{
                                                $check ='';
                                            }
                                            ?>
                                            <li><label> <input <?php echo e($check); ?> value="<?php echo e($normal->id); ?>" name="permission_id[]" type="checkbox"> <?php echo e($normal->name); ?> </label> </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </fieldset>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <br>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>


                        <?php echo Form::close(); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/permission/rolePermission.blade.php ENDPATH**/ ?>