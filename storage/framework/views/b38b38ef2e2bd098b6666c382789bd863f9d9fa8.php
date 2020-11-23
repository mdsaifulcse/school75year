
<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('home')); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li class="<?php echo e(URL::to('all-users')); ?>">Pending List</li>
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
        .student-list .dropdown-menu>li>a{
            display: inline-block;
            padding: 3px 8px;
            color: #ffffff !important;
        }
        .information_address{
            margin-top: 15px;
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
                <h3 class="box-title">Pending Application List</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">


                    <div class="row">
                        <div class="col-sm-12 table-responsive">
                            <table id="studentsData" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                <tr>
                                    <th width="1%">Sl.No</th>
                                    <th>Name</th>
                                    <th>Guardian Name</th>
                                    <th>Mobile</th>
                                    <th>Batch/Class</th>
                                    <th>Village</th>
                                    <th>Union</th>
                                    <th>Photo</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                            </table>
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
        $(function() {
            $('#studentsData').DataTable( {
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: "<?php echo e(url('/show-pending-applicant/0')); ?>",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    { data: 'name',name:'users.name'},
                    { data: 'father_name',name:'user_infos.father_name'},
                    { data: 'mobile_no',name:'users.mobile_no'},
                    { data: 'batch_name'},
                    { data: 'village',name:'villages.village'},
                    { data: 'union',name:'unions.union'},
                    { data: 'Photo'},
                    { data: 'Action'},

                ]
            });
        });


        // get payment statement data -----------
        function applicantDetails(useId) {
            $('#invoiceDetails').load('<?php echo e(URL::to("user-applicant-details")); ?>/'+useId);
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

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/student/bookedStudent.blade.php ENDPATH**/ ?>