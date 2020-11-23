<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('home')); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li> Applicant Details </li>
    </ol>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <style>
        .info_user h3{
            padding: 0 !important;
            margin: 0!important;
            font-size: 16px;
            font-weight: 700;
        }
        .information{

            padding: 10px;
            margin-top: 34px !important;
            /* margin: 0 auto; */
            text-align: center;
        }
        .information h3{
            font-weight: bold;
            font-size: 18px;
            color: #00275e;
            padding: 5px;
            width: 100%;
            border: 2px solid orange;
            margin: 0 auto;
        }
        .information span{
            padding-left: 0px;
            font-weight: bold;
            font-size: 13px;
        }
        .heading_table td{
            border: 1px solid orange !important;
        }
        .heading_table2 td{
            border: 2px solid orange !important;
        }
        .highlight td{
            font-weight: bold;
        }
        .note p{
            text-align: center;
            font-style: italic;
            line-height: .5;

        }

        .dropdown-menu>li>a{
            display: inline-block;
            padding: 3px 5px;
            color: #ffffff;
        }
        .information_address{
            margin-top: 15px;
        }

        .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
            padding: 5px 10px;
        }
        @media  print {
            /* Hide everything in the body when printing... */
            .printbody{ display: none; }

            .main-footer{
                display: none;
            }
            .print-edit{
                display: none;
            }
            .pb_form_v5v{
                padding: 0 !important;
            }

            .modal-open .modal {

                overflow-y: hidden;
            }
            .form-area{
                padding: 0 !important;
            }
            .logo img{


                margin: 0 !important;
            }
            .print_logo{
                width: 25% !important;
                float: left;
            }
            .d-print-none{
                width: 45% !important;
                float: left;
            }
            .information{
                margin-top: 20px !important;
            }
            .information h3{
                font-weight: bold;
                font-size: 22px;
                color: #00275e;
                margin-top: 0;
                padding: 5px;
                width: 80%;
                border: 2px solid orange;
                margin: 0 auto;
            }
            .print_information_address{
                width: 30% !important;
                float: right;
            }
            .information_address{
                margin-top: 0 !important;
            }

        }


    </style>

    <div class="content">


        <div class="box box-danger printbody">
            <div class="box-header bg-info ">
                <h3 class="box-title">Approve with payment</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">


                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-1 col-xs-1 print_logo">
                            <div class="logo">
                                <img src="<?php echo e(asset('images/default/logo.png')); ?>" style="width: 80px;margin: 15px 0 0 10px;border-radius: 50%;"/>

                            </div>
                        </div>

                        <div class="d-print-none col-md-4 col-xs-11">
                            <div class="print-edit highlight" style="text-align: center">

                                

                            </div>
                            <div class="information">

                                <h3>Diamond Jubilee 2020</h3>
                                <h4>Sholla High School & College</h4>
                                <h5>Applicant Details</h5>

                            </div>

                        </div>
                        <div class="col-md-3 pull-right print_information_address">
                            <div class="row">
                                <div class="information_address">
                                    <p><span style="font-weight: 600; font-size: 15px"></span><br/>

                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 table-responsive">
                            <h4> Registration Details, <span class="pull-right">
                                    Status :
                                    <?php if($userDetails->status==0): ?>
                                        <span class="btn btn-warning"> Pending <i class="fa fa-clock-o"></i></span>
                                    <?php elseif($userDetails->status==1): ?>
                                        <span class="btn btn-info"> Partial Approve </span>
                                    <?php elseif($userDetails->status==2): ?>
                                        <span class="btn btn-success"> Full Approve <i class="fa fa-check"></i></span>
                                    <?php elseif($userDetails->status==3): ?>
                                        <span class="btn btn-danger"> Rejected <i class="fa fa-times"></i></span>
                                    <?php endif; ?>
                                </span>
                            </h4>
                            <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo e($userData->name); ?></td>
                                </tr>
                                <tr>
                                    <th>Father's Name</th>
                                    <td><?php echo e($userDetails->father_name); ?></td>
                                </tr>
                                <tr>
                                    <th>Mobile</th>
                                    <td><?php echo e($userData->mobile_no); ?></td>
                                </tr>
                                <tr>
                                    <th>Batch/Class</th>
                                    <td>
                                        <?php if($userDetails->batch_id==1): ?>
                                            <span> <?php echo e($userDetails->class_name); ?> </span>
                                        <?php else: ?>
                                            <?php echo e($userDetails->userInfoBatch->batch_name); ?>

                                        <?php endif; ?>

                                    </td>
                                </tr>
                                <tr>
                                    <th>Village</th>
                                    <td><?php echo e($userDetails->userInfoVillage->village); ?></td>
                                </tr>
                                <tr>
                                    <th>Union</th>
                                    <td><?php echo e($userDetails->userInfoUnion->union); ?></td>
                                </tr>
                                <tr>
                                    <th>Thanaa/Upazila</th>
                                    <td><?php echo e($userDetails->userInfoThana->thana_upazila); ?></td>
                                </tr>
                                <tr>
                                    <th>District</th>
                                    <td><?php echo e($userDetails->userInfoDist->district); ?></td>
                                </tr>

                                <hr>
                                <tr>
                                    <th colspan="2" class="text-center text-danger">Ticket & Fee info</th>
                                </tr>

                                <tr>
                                    <th>Registration Fee</th>

                                    <td>
                                        <?php if($userDetails->student_category==1): ?>
                                            <span>1 x 800 = 800</span>

                                            <?php elseif($userDetails->student_category==2): ?>

                                            <?php if($userDetails->class_name=='Honours' || $userDetails->class_name=='Masters' || $userDetails->class_name=='Eleven' || $userDetails->class_name=='Twelve'): ?>
                                                <span>1 x 400 = 400 </span>
                                                <?php else: ?>
                                                <span>1 x 200 =200 </span>
                                             <?php endif; ?>

                                        <?php endif; ?>



                                    </td>
                                </tr>

                                <?php if($userDetails->spouse!=0): ?>
                                    <tr>
                                        <th>Spouse</th>
                                        <td>  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;500</td>
                                    </tr>
                                <?php endif; ?>


                                <?php if($userDetails->guest_no!=''): ?>
                                <tr>
                                    <th>Number of Guest</th>
                                    <td> <?php echo e($userDetails->guest_no); ?> x 400 = <?php echo e($userDetails->guest_no*400); ?></td>
                                </tr>
                                <?php endif; ?>

                                <?php if($userDetails->children!=''): ?>
                                    <tr>
                                        <th>Number Children</th>
                                        <td> <?php echo e($userDetails->children); ?> x 200 = <?php echo e($userDetails->children*200); ?></td>
                                    </tr>
                                <?php endif; ?>


                                <tr>
                                    <th>Total Ticket </th>
                                    <td><?php echo e($userDetails->ticket_no); ?></td>
                                </tr>

                                <tr style="color: #9C27B0">
                                    <th>Total Receivable </th>
                                    <td><?php echo e($userDetails->payable); ?>.Tk</td>
                                </tr>

                                <tr style="color: #9C27B0">
                                    <th>Payment Method</th>
                                    <td><?php echo e($userDetails->payment_method); ?>


                                        <?php if($userDetails->payment_method=='bKash'): ?>
                                            ( bKash Charge: <?php echo e(($userDetails->payable*19)/1000); ?>.Tk)
                                        <?php endif; ?>

                                    </td>
                                </tr>


                            </table>


                            <div class="well">
                                    <?php echo Form::open(['url'=>'approve-with-payment','method'=>'POST','class'=>'registration-from']); ?>

                                    <?php echo e(csrf_field()); ?>


                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group" style="display: grid">
                                                    <label>Received Amount</label>
                                                    <?php echo e(Form::number('paid',$value=old('paid'),['min'=>$userDetails->payable,'max'=>$userDetails->payable,'class'=>'form-control pb_height-50 reverse','placeholder'=>'Enter received amount','required'=>true])); ?>

                                                </div>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group" style="display: grid">
                                                    <label>Voucher Number</label>
                                                    <?php echo e(Form::text('voucher_no',$value=old('voucher_no'),['class'=>'form-control pb_height-50 reverse','placeholder'=>'Enter voucher number','required'=>true])); ?>

                                                    <?php if($errors->has('voucher_no')): ?>
                                                        <span class="help-block">
                        <strong class="text-danger"><?php echo e($errors->first('voucher_no')); ?></strong>
                    </span>
                                                    <?php endif; ?>
                                                </div>

                                            </div>

                                            <div class="col-md-2">
                                            <div class="form-group">
                                                <label> &nbsp; </label>
                                                <input type="submit" value="submit" class="btn btn-primary " onclick="return confirm('Are you Sure Voucher number is Correct ?')">
                                            </div>

                                            </div>

                                        </div>

                                        <input type="hidden" name="user_id" value="<?php echo e($userData->id); ?>" />
                                        <?php if($errors->has('paid')): ?>
                                            <span class="help-block">
                        <strong class="text-danger"><?php echo e($errors->first('paid')); ?></strong>
                    </span>
                                        <?php endif; ?>

                                    <hr>
                                    <h5 style="padding: 8px;color: #240d82;">Approve & Ree Received By <?php echo e(Auth::user()->name); ?>, Mobile: <?php echo e(Auth::user()->mobile_no); ?></h5>
                                <?php echo Form::close(); ?>



                            </div>


                        </div>
                    </div>
                    <div class="modal fade" id="invoiceDetails" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    </div>
                    <!--end modal -->

                </div>
            </div>
        </div>

    </div>
    <!-- /.box-body -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript">


        // get payment statement data -----------
        function invoiceDetails(useId) {
            $('#invoiceDetails').load('<?php echo e(URL::to("payment-statement")); ?>/'+useId);
            $("#invoiceDetails").modal('show');

        }

    </script>



    <script>

        $(function(){
            $('#printBtn').on('click', function() {
                //Print ele2 with default options
                $.print(".printForm");
            });
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/student/approve-with-payment.blade.php ENDPATH**/ ?>