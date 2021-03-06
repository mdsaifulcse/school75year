<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('home')); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li class="<?php echo e(URL::to('all-users')); ?>">Reg. Complete List</li>
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


        .form-control{
            width: 100% !important;
        }


    </style>

    <div class="content">


        <div class="box box-danger printbody">
            <div class="box-header bg-info ">
                <h3 class="box-title">Generate Report Pdf/Excel</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                    <?php echo Form::open(['url'=>'/generate-report','method'=>'GET','id'=>'reportForm']); ?>

                    <div class="row">

                        <div class="col-md-2 col-lg-2 ">
                            <label> Report Type </label>

                            <?php echo e(Form::select('report_type',['1'=>'Pdf for Ticket','2'=>'Pdf for Magazine','3'=>'Excel'],$request->report_type,['id'=>'reportType','class'=>'form-control','placeholder'=>'Select one','required'=>true,])); ?>

                        </div>

                        <div class="col-md-2 col-lg-2 ">
                            <label> Register Type </label>

                            <?php echo e(Form::select('student_category',['1'=>'Batch wise','2'=>'School Student','3'=>'Teacher'],$request->student_category,['id'=>'registerType','class'=>'form-control','placeholder'=>'Select one','required'=>true,])); ?>

                        </div>

                        <div class="col-md-2 col-lg-2 " id="batch"  style="display: <?php if(isset($request->student_category) && $request->student_category==1): ?>block  <?php else: ?> none <?php endif; ?> ">
                            <label> Select Batch </label>

                            <?php echo e(Form::select('batch_id',$batches,$request->batch_id,['id'=>'batchId','class'=>'form-control','placeholder'=>'All Batch','required'=>false])); ?>

                        </div>

                        <div class="col-md-2 col-lg-2 " id="classDiv" style="display: <?php if(isset($request->student_category) && $request->student_category==2): ?>block  <?php else: ?> none <?php endif; ?> ">
                            <label> Select Class </label>

                            <?php echo e(Form::select('class_name',['Six'=>'Six','Seven'=>'Seven','Eight'=>'Eight','Nine'=>'Nine','Ten'=>'Ten'],$request->class_name,['id'=>'classId','class'=>'form-control','placeholder'=>'All Class','required'=>false])); ?>

                        </div>

                        <div class="col-md-2">
                            <label class="control-label"> &nbsp; &nbsp;&nbsp;&nbsp; </label>
                            <br>
                            <button type="submit" class="btn btn-primary"> Generate Report </button>
                        </div>
                        <div class="col-md-1">
                            <label class="control-label"> &nbsp; </label>
                            <a href="<?php echo e(URL::to('/generate-report')); ?>" class="btn btn-default"> <i class="fa fa-refresh"></i> Refresh</a>
                        </div>
                    </div>

                    <?php echo Form::close(); ?>


                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 table-responsive">

                        <?php if(count($reportData)>0): ?>
                            <hr>

                                <div class="reg-header pull-right">
                                    <?php
                                    $fileName='All_batch';
                                    if ($request->batch_id!=''){
                                        $fileName= 'Batch_Class'.$batches[$request->batch_id];
                                    }

                                    ?>
                                    <button type="button" class="btn btn-success" onclick='exportTableToExcel("registrationData", "<?php echo e($fileName); ?>")'> Download Excel - (<?php echo e(count($reportData)); ?>) </button>
                                </div>
                            <div id="registrationData">

                            <table class="table table-border table-striped">
                                <thead>
                                <tr class="bg-primary">
                                    <th>Sl</th>
                                    <th>Voucher No.</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Batch/Class</th>
                                    <th>Village</th>
                                    <th>Self</th>
                                    <th>Spouse</th>
                                    <th>Children</th>
                                    <th>Guest</th>
                                    <th>Total Ticket</th>

                                </tr>
                                </thead>

                                <tbody>

                                <?php $i=1;?>
                                <?php $__currentLoopData = $reportData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ky=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td><?php echo e($i++); ?></td>
                                    <td><?php echo e($data->voucher_no); ?></td>
                                    <td><?php echo e($data->name); ?></td>
                                    <td><?php echo e($data->mobile_no); ?></td>
                                    <td>
                                        <?php if($data->class_name!=''): ?>
                                            <?php echo e($data->class_name); ?>

                                        <?php else: ?>
                                            <?php echo e($data->batch_name); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo e($data->village); ?></td>
                                    <td>1</td>

                                    <td>
                                        <?php if($data->spouse==0): ?>
                                            <span>0</span>
                                        <?php else: ?>
                                            <span><?php echo e($data->spouse); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if($data->children==''): ?>
                                            <span>0</span>
                                        <?php else: ?>
                                            <span><?php echo e($data->children); ?></span>
                                        <?php endif; ?>
                                    </td>

                                    <td>
                                        <?php if($data->guest_no==''): ?>
                                            <span>0</span>
                                        <?php else: ?>
                                            <span><?php echo e($data->guest_no); ?></span>
                                        <?php endif; ?>
                                    </td>

                                    <td><?php echo e($data->ticket_no); ?></td>

                                </tr>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>


                            </table>

                            <?php else: ?>

                            <?php if(isset($request->report_type) && $request->report_type!=''): ?>
                                <hr>
                                <h4 class="text-danger text-center">No Data Found</h4>
                                <?php endif; ?>

                            <?php endif; ?>

                        </div>
                        </div>
                    </div>


                    <!--end modal -->

                </div>
            </div>
        </div>

    </div>
    <!-- /.box-body -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

    <script>
        $('#reportType').on('change',function () {
            console.log($(this).val())
            if ($(this).val()!=3){
                $('#reportForm').attr('target','_blank')
            }else {
                $('#reportForm').attr('target','')
            }
        })
    </script>

    <script>
        $('#registerType').on('change',function () {
            var registerType=$(this).val()
            var reportType=$('#reportType').val()

            if (reportType!=2 && registerType==1) {
                $('#batch').css('display', 'block')
                $('#batchId').attr('required', true)
                console.log('00')
            }
            else if((reportType==2 && registerType==1)){
                $('#batch').css('display', 'block')
                $('#batchId').attr('required', false)
                console.log('11')
            }
            else {
                $('#batch').css('display','none')
                $('#batchId').attr('required',false)
                $('#batchId').val('')
                console.log('22')
            }

            if (reportType!=2 && registerType==2) {
                $('#classDiv').css('display', 'block')
                $('#classId').attr('required', true)

            }else if(reportType==2 && registerType==2){
                $('#classDiv').css('display', 'block')
                $('#classId').attr('required', false)
            }else {
                $('#classDiv').css('display','none')
                $('#classId').attr('required',false)
                $('#classId').val('')
            }
        })
    </script>

    <script>

        function download_csv(csv, filename) {
            var csvFile;
            var downloadLink;
            // CSV FILE
            csvFile = new Blob([csv], {type: "text/csv"});
            // Download link
            downloadLink = document.createElement("a");

            // File name
            downloadLink.download = filename;

            // We have to create a link to the file
            downloadLink.href = window.URL.createObjectURL(csvFile);

            // Make sure that the link is not displayed
            downloadLink.style.display = "none";

            // Add the link to your DOM
            document.body.appendChild(downloadLink);

            // Lanzamos
            downloadLink.click();
        }



        function exportTableToExcel(tableID, filename) {

            var csv = [];
            var rows = document.querySelectorAll("#"+tableID+" table tr");

            for (var i = 0; i < rows.length; i++) {
                var row = [], cols = rows[i].querySelectorAll("#"+tableID+" td, th");

                for (var j = 0; j < cols.length; j++)
                    row.push(cols[j].innerText);

                csv.push(row.join(","));
            }

            // Download CSV
            download_csv(csv.join("\n"), filename+'.csv');
        }




    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/report/index.blade.php ENDPATH**/ ?>