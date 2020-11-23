<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Registration Sheet </title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
    <style>
        @page  {
            margin: 0cm 0cm;
            margin-left: 25px;
            margin-right: 25px;
            margin-top: 120px;
            /*margin-bottom: 220px;*/
        }
        .reg-header h4, h5{
            margin: 5px;
        }
        .page-break {
            page-break-after: always;
        }
        .pagenum:after{
            content: counter(page);
        }
        .pagenum{
            position: absolute;
            right: 10px;
        }

        .header{
            position: fixed;
        }
        .header {top: -120px; left: 0px; right: 0px;  height: 150px;}
    </style>
</head>
<body>

<div class="header">
    <table align="" style="width: 100%" class=" ">
        <tr>
            <td style="width:5%;">
                <img src="<?php echo e(asset('/images/default/logo.png')); ?>" style="width: 80px" alt="Company Logo" title="">
            </td>
            <td style="width:95%;text-align: center">
                <span class="pagenum"></span>
                <div class="reg-header">
                    <h4>  DIAMOND JUBILEE-2020</h4>
                    <h5>  SHOLLA HIGH SCHOOL &amp; COLLEGE</h5>
                    <h5>  REGISTRATION SHEET</h5>
                </div>
            </td>
        </tr>
    </table>
    <hr>
</div>

<div class="main-data">


    <?php if(count($reportData)>0): ?>

        <div id="registrationData">

            <table align="center" class="table table-border table-striped" border="1" cellspacing="0">
                <thead>
                <tr class="bg-primary">
                    <th>Sl</th>
                    <?php if($report_type==1): ?>
                        <th>Voucher</th>
                    <?php endif; ?>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Batch/Class</th>
                    <th>Village</th>
                    <?php if($report_type==1): ?>
                        <th>Total Ticket</th>
                    <?php endif; ?>
                    <th>Photo</th>
                    <?php if($report_type==1): ?>
                        <th width="10%">Signature</th>
                    <?php endif; ?>

                </tr>
                </thead>

                <tbody>

                <?php $i=1;?>
                <?php $__currentLoopData = $reportData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ky=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($i++); ?></td>
                        <?php if($report_type==1): ?>
                            <td><?php echo e($data->voucher_no); ?></td>
                        <?php endif; ?>
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
                        <?php if($report_type==1): ?>
                            <td style="text-align: center"><?php echo e($data->ticket_no); ?></td>
                        <?php endif; ?>
                        <td style="min-height: 30px !important;">
                            <span>
                            <?php if($data->image!=''): ?>
                                <img src="<?php echo e(asset($data->image)); ?>" style="width: <?php if($report_type==1): ?> 20px@else 60px <?php endif; ?>">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('/images/default/logo.png')); ?>" style="width: <?php if($report_type==1): ?> 20px <?php else: ?> 20px <?php endif; ?>">
                                <?php endif; ?>
                        </span>

                        </td>
                        <?php if($report_type==1): ?>
                            <td>  </td>
                        <?php endif; ?>

                    </tr>

                    
                    
                    


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>


            </table>

            <?php else: ?>
                <h4 class="text-danger text-center">No Data Found</h4>
            <?php endif; ?>

        </div>

</div>
<div>

</div>
<br class="page-break">


<script src="<?php echo e(asset('js/app.js')); ?>" type="text/js"></script>
</body>
</html><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/report/pdf.blade.php ENDPATH**/ ?>