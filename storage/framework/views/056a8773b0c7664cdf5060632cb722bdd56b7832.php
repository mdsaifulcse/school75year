
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">
                Villages list
            </a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-info">
                        <div class="card-btn pull-right">
                            <a  href="<?php echo e(URL::to('/thana-upazila/'.$union->thana_upazila_id)); ?>" class="btn btn-warning btn-sm" title="Click here go to thana / upazila area " > <i class="fa fa-chevron-left" aria-hidden="true"></i> Go Back</a>
                            <a  href="#modal-dialog" class="btn btn-primary btn-sm" data-toggle="modal" title="Add New Thana Or Upazila " > <i class="fa fa-plus"></i> Add New</a>
                        </div>
                        <h4 class="card-title">All Village of <u><?php echo e($union->union); ?></u> Union</h4>
                    </div>
                    <div class="card-body">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <?php echo Form::open(array('route' => 'village.store','class'=>'form-horizontal','method'=>'POST')); ?>

                                    <div class="modal-header">
                                        <h4 class="modal-title">Add new village</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">Name <sup class="text-danger">*</sup> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <?php echo e(Form::text('village',$value=old('village'),['class'=>'form-control','placeholder'=>'Village name','required'=>true])); ?>

                                                <span class="text-danger">
                                                <?php echo e($errors->has('village')?$errors->first('village'):''); ?>

                                            </span>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Serial <sup class="text-danger">*</sup> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <?php echo e(Form::number('serial_num',$value=$max_serial+1,['class'=>'form-control','min'=>1,'max'=>$max_serial+1,'required'=>true])); ?>

                                                <input type="hidden" name="union_id" value="<?php echo e($union->id); ?>" >
                                                <span class="text-danger">
                                                <?php echo e($errors->has('serial_num')?$errors->first('serial_num'):''); ?>

                                            </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                                        <button type="submit" class="btn btn-sm btn-success">Confirm</button>
                                    </div>
                                    <?php echo Form::close();; ?>

                                </div>
                            </div>
                        </div> <!--  =================== End modal ===================  -->

                        <!--  -->
                        <div class="view_branch_set">

                        <?php if(count($villages)>0): ?>
                            <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Union</th>
                                    <th>Village</th>
                                    <th>Status</th>
                                    <th width="16%;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>

                                <?php $__currentLoopData = $villages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $village): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo e($village->serial_num); ?></td>
                                        <td><?php echo e($village->union); ?></td>
                                        <td><?php echo e($village->village); ?></td>
                                        <td class="text-dark">
                                            <?php if($village->status==1): ?>
                                                <a title="Active"><i class="fa fa-check-circle text-primary"></i></a>
                                            <?php else: ?>
                                                <a title="Inactive" ><i class="fa fa-times text-danger"></i></a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <!-- edit section -->
                                            <a href="#modal-dialog<?php echo $village->id;?>" class="btn btn-xs btn-primary" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <!-- #modal-dialog -->

                                            <div class="modal fade" id="modal-dialog<?php echo $village->id;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <?php echo Form::open(array('route' => ['village.update',$village->id],'class'=>'form-horizontal','method'=>'PUT')); ?>

                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit old village info</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3">Status :</label>
                                                                <div class="col-md-4 col-sm-4">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="status" value="1" id="radio-required" data-parsley-required="true" <?php if($village->status=="1"): ?><?php echo e("checked"); ?><?php endif; ?>> Active
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-4">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="status" id="radio-required2" value="0" <?php if($village->status=="0"): ?><?php echo e("checked"); ?><?php endif; ?>> Inactive
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Name <sup class="text-danger">*</sup> :</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <?php echo e(Form::text('village',$value=$village->village,['class'=>'form-control','placeholder'=>'Village','required'=>true])); ?>

                                                                    <span class="text-danger">
                                                                        <?php echo e($errors->has('village')?$errors->first('village'):''); ?>

                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Serial <sup class="text-danger">*</sup> :</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <?php echo e(Form::number('serial_num',$value=$village->serial_num,['class'=>'form-control','min'=>1,'required'=>true])); ?>

                                                                        <input type="hidden" name="union_id" value="<?php echo e($village->union_id); ?>">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                                                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                                                        </div>
                                                        <?php echo Form::close();; ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end edit section -->

                                            <!-- delete section -->
                                            <?php echo e(Form::open(array('route'=>['village.destroy',$village->id],'method'=>'DELETE','class'=>'deleteForm','id'=>"deleteForm$village->id"))); ?>

                                            <button type="button" class="btn btn-danger btn-xs" onclick='return deleteConfirm("deleteForm<?php echo e($village->id); ?>")'><i class="fa fa-trash"></i></button>
                                        <?php echo Form::close(); ?>

                                        <!-- delete section end -->
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <h2 class="text-danger text-center"> No data available here. </h2>
                                <?php endif; ?>
                                </tbody>
                            </table>
                            <?php echo e($villages->render()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/setting/village/index.blade.php ENDPATH**/ ?>