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

        .data-table tr td .info {
            border: 1px solid;
            border-right: none;
            padding: 7px;
            margin-bottom: 20px;
        }
        .data-table tr td .image{
            border: 1px solid;
            padding: 2px;
            border-left: none;
            height: 94px;
        }
        .data-table tr td .image img{
            /*border: 1px dashed;*/
            max-width: 100%;
            max-height: 87px;
        }

        @page  { size:8.5in 11in; margin: 1cm }
        @media  print {

            .data-table tr td .info {
                border: 1px solid;
                border-right: none;
                padding: 7px;
                margin-bottom: 20px;
            }
            .data-table tr td .image{
                border: 1px solid;
                padding: 2px;
                border-left: none;
                height: 94px;
            }
            .data-table tr td .image img{
                /*border: 1px dashed;*/
                max-width: 100%;
                max-height: 87px;
            }

            .pagebreak {page-break-after: always;}

        }


    </style>

    <div class="content">


        <div class="box box-danger">
            <div class="box-header bg-info ">
                <h3 class="box-title hidden-print">Generate Report Pdf/Excel</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">


                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 table-responsive clearfix">
                            <?php if(count($reportData)>0): ?>
                                <div class="reg-header pull-right">
                                    <?php
                                    $fileName='All_batch';
                                    if ($request->batch_id!=''){
                                        $fileName= 'Batch_Class'.$batches[$request->batch_id];
                                    }

                                    ?>
                                    <button type="button" class="btn btn-success hidden-print" id="printBtn"><i class="fa fa-print"></i> Print PDF - (<?php echo e(count($reportData)); ?>) </button>
                                </div>

                                <hr>
                                <div id="registrationData" style="padding: 20px;">

                                    
                                    
                                    
                                    
                                    
                                    

                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    

                                    
                                    
                                    

                                    <?php
                                    $total=count($reportData);
                                    $chunk=round($total/2);
                                    $i=0;
                                    ?>

                                    <div style="width: 100%;margin-top: 10px" class="clearfix">
                                        <?php $__currentLoopData = $reportData->chunk($chunk); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <table style="width: 48%;float: left;margin-right: 2%" class="data-table clearfix">
                                                <?php $sl=0?>
                                                <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php $sl+=1;?>
                                                    <tr>
                                                        <td style="float:left;width: 80%">

                                                            <div class="info">
                                                                <p>Name: <b> <?php echo e($data->name); ?></b></p>
                                                                
                                                                            
                                                                        
                                                                            
                                                                        
                                                                    
                                                                

                                                                <p>Mobile: <b> <?php echo e($data->mobile_no); ?></b></p>
                                                                <p>Village: <b> <?php echo e($data->village); ?></b></p>
                                                            </div>
                                                        </td>

                                                        <td style="float:left;width:20%" <?php if($sl==6): ?>class="pagebreak" <?php $sl=0;?> <?php endif; ?> >
                                                            <div class="image">
                                                                <?php if($data->image!=''): ?>
                                                                    <img src="<?php echo e(asset($data->image)); ?>" >
                                                                <?php else: ?>
                                                                    <img src="<?php echo e(asset('/images/default/logo.png')); ?>">
                                                                <?php endif; ?>
                                                            </div>
                                                        </td>


                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </table>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>


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

            if (registerType==1){
                $('#batch').css('display','block')
            }else {
                $('#batch').css('display','none')
                $('#batchId').val('')
            }

            if (registerType==2){
                $('#classDiv').css('display','block')
            }else {
                $('#classDiv').css('display','none')
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

    <script>

        $(function(){
            $('#printBtn').on('click', function() {
                //Print ele2 with default options
                $.print("#registrationData");
            });
        });

        function generatePDF(fileName) {
            // Choose the element that our invoice is rendered in.
            const element = document.getElementById("registrationData");
            // Choose the element and save the PDF for our user.
            html2pdf().from(element).save(fileName+'.'+'pdf');
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/report/index-magazine.blade.php ENDPATH**/ ?>