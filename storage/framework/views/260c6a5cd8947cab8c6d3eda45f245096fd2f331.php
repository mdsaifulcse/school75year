<?php $__env->startSection('breadcrumb'); ?>
    <h1>
        Dashboard
        <small>Menu</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('home')); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li class="<?php echo e(URL::to('menu')); ?>">Menu</li>
        <li class="#">Edit</li>
    </ol>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div id="content" class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-info">
                    Edit Menu
                    <div class="card-btn pull-right">
                        <a href="<?php echo e(route('menu.index')); ?>" class="btn btn-primary btn-sm pull-right"> <i class="fa fa-list"></i> View All </a>
                    </div>
                </div>

                <?php echo Form::open(array('route' => ['menu.update', $data->id],'method'=>'PUT','class'=>'form-horizontal','files'=>true)); ?>

                <div class="card-body pd-top-20">

                    <div class="form-group row   <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                        <?php echo e(Form::label('name', ' Name', array('class' => 'col-md-2 control-label'))); ?>

                        <div class="col-md-8">
                            <?php echo e(Form::text('name',$data->name,array('class'=>'form-control','placeholder'=>'Name','required'))); ?>

                        </div>
                    </div>
                    <div class="form-group row  <?php echo e($errors->has('url') ? 'has-error' : ''); ?>">

                        <?php echo e(Form::label('url', 'URL', array('class' => 'col-md-2 control-label'))); ?>

                        <div class="col-md-4">
                            <div class="input-group">
                                 <span class="input-group-prepend">
                                    <label class="input-group-text"><?php echo e(URL::to('/')); ?>/</label>
                                </span>
                                <?php echo e(Form::text('url',$data->url,array('class'=>'form-control','placeholder'=>'URL','required'))); ?>

                            </div>
                            <?php if($errors->has('url')): ?>
                                <span class="help-block">
                        <strong><?php echo e($errors->first('url')); ?></strong>
                    </span>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-prepend">
                                    <label class="input-group-text">Icon Class:</label>
                                </span>
                                <?php echo e(Form::text('icon_class',$data->icon_class,array('class'=>'form-control','placeholder'=>'Ex: fa fa-folder','required'))); ?>

                                <?php if($errors->has('icon_class')): ?>
                                    <span class="help-block">
                                    <strong><?php echo e($errors->first('icon_class')); ?></strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-md-2">
                                <label class="slide_upload profile-image" for="file">
                                    <?php if($data->big_icon!=''): ?>
                                        <img id="image_load" src="<?php echo e(asset($data->big_icon)); ?>" style="width: 100px;height: auto;">
                                    <?php else: ?>
                                    <img id="image_load" src="<?php echo e(asset('images/default/icon-image.png')); ?>" style="width: 100px;height: auto;">
                                    <?php endif; ?>
                                </label>

                                <input id="file" style="display:none" name="icon" type="file" onchange="photoLoad(this,this.id)">

                                <?php if($errors->has('icon')): ?>
                                    <span class="help-block text-danger">
                                    <strong>The icon image dimensions(Y, X) should not be less then 120 and grater then 240</strong>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <?php echo e(Form::label('slug', 'Permission', array('class' => 'col-md-2 control-label'))); ?>

                        <div class="col-md-8">
                            <?php echo e(Form::select('slug[]', $permissions,json_decode($data->slug,true), ['class' => 'form-control select select2','multiple','required'])); ?>

                        </div>
                    </div>

                    <div class="form-group row">
                        <?php echo e(Form::label('serial_num', 'Others', array('class' => 'col-md-2 control-label'))); ?>

                        <div class="col-md-2">
                            <?php $max=$max_serial+1; ?>
                            <?php echo e(Form::number('serial_num',$data->serial_num,array('class'=>'form-control','placeholder'=>'Serial Number','max'=>"$max",'min'=>'0'))); ?>

                            <small> Serial </small>
                        </div>

                        <div class="col-md-3">
                            <?php echo e(Form::select('type', array('1' => 'Menu For Admin / Student','2' => 'Menu For Applicant '),$data->type, ['class' => 'form-control'])); ?>

                            <small> Menu Area </small>
                        </div>

                        <div class="col-md-3">
                            <?php echo e(Form::select('status', array('1' => 'Active', '2' => 'Inactive'),$data->status, ['class' => 'form-control'])); ?>

                            <small> Status </small>
                        </div>

                    </div>

                    <?php echo e(Form::hidden('id',$data->id)); ?>

                    <div class="form-group row">
                        <div class="col-md-3"></div>
                        <div class="col-md-9">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/menu/edit.blade.php ENDPATH**/ ?>