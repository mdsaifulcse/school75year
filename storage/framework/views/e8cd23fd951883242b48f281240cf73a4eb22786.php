
<?php $__env->startSection('breadcrumb'); ?>
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('/')); ?>">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">
                Thana / Upazila
            </a>
        </li>
    </ul>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header card-info">
                        <div class="card-btn pull-right">
                            <a  href="#modal-dialog" class="btn btn-primary btn-sm" data-toggle="modal" title="Add New Thana Or Upazila " > <i class="fa fa-plus"></i> Add New</a>

                        </div>
                        <h4 class="card-title">All Thana / Upazila List of <u><?php echo e($district->district); ?></u></h4>
                    </div>
                    <div class="box-body">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <?php echo Form::open(array('route' => 'thana-upazila.store','class'=>'form-horizontal','method'=>'POST')); ?>

                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Thana / Upazila</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Name <sup class="text-danger">*</sup> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <?php echo e(Form::text('thana_upazila',$value=old('thana_upazila'),['class'=>'form-control','placeholder'=>'Thana / upazila name','required'=>true])); ?>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Serial <sup class="text-danger">*</sup> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                <?php echo e(Form::number('serial_num',$value=$max_serial+1,['class'=>'form-control','min'=>1,'max'=>$max_serial+1,'required'=>true])); ?>

                                                <input type="hidden" name="district_id" value="<?php echo e($district->id); ?>" >
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

                        <?php if(count($thanaUpazilas)>0): ?>
                            <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>District</th>
                                    <th>Thana Or Upazila</th>
                                    <th>Union</th>
                                    <th>Status</th>
                                    <th width="16%;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>

                                <?php $__currentLoopData = $thanaUpazilas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thanaUpazila): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo e($thanaUpazila->serial_num); ?></td>
                                        <td><?php echo e($thanaUpazila->district); ?></td>
                                        <td><?php echo e($thanaUpazila->thana_upazila); ?></td>
                                        <td> <a class="btn btn-success btn-xs" href="<?php echo e(URL::to('union/'.$thanaUpazila->id)); ?>" title="Create union under this Thana / Upazila "><i class="fa fa-pencil"></i>  Create </a> </td>
                                        <td class="text-dark">
                                            <?php if($thanaUpazila->status==1): ?>
                                                <a title="Active"><i class="fa fa-check-circle text-primary"></i></a>
                                            <?php else: ?>
                                                <a title="Inactive" ><i class="fa fa-times text-danger"></i></a>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <!-- edit section -->
                                            <a href="#modal-dialog<?php echo $thanaUpazila->id;?>" class="btn btn-xs btn-primary" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <!-- #modal-dialog -->

                                            <div class="modal fade" id="modal-dialog<?php echo $thanaUpazila->id;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <?php echo Form::open(array('route' => ['thana-upazila.update',$thanaUpazila->id],'class'=>'form-horizontal','method'=>'PUT')); ?>

                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit Old Thana / Upazila Info</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3">Status :</label>
                                                                <div class="col-md-4 col-sm-4">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="status" value="1" id="radio-required" data-parsley-required="true" <?php if($thanaUpazila->status=="1"): ?><?php echo e("checked"); ?><?php endif; ?>> Active
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-4">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="status" id="radio-required2" value="0" <?php if($thanaUpazila->status=="0"): ?><?php echo e("checked"); ?><?php endif; ?>> Inactive
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Name <sup class="text-danger">*</sup> :</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <?php echo e(Form::text('thana_upazila',$value=$thanaUpazila->thana_upazila,['class'=>'form-control','placeholder'=>'Thana / upazila name','required'=>true])); ?>

                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Serial <sup class="text-danger">*</sup> :</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    <?php echo e(Form::number('serial_num',$value=$thanaUpazila->serial_num,['class'=>'form-control','min'=>1,'required'=>true])); ?>


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
                                            <?php echo e(Form::open(array('route'=>['thana-upazila.destroy',$thanaUpazila->id],'method'=>'DELETE','class'=>'deleteForm','id'=>"deleteForm$thanaUpazila->id"))); ?>

                                            <button type="button" class="btn btn-danger btn-xs" onclick='return deleteConfirm("deleteForm<?php echo e($thanaUpazila->id); ?>")'><i class="fa fa-trash"></i></button>
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
                            <?php echo e($thanaUpazilas->render()); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/setting/thana-upazila/index.blade.php ENDPATH**/ ?>