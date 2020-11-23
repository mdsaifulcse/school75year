<?php $__env->startSection('breadcrumb'); ?>
    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('home')); ?>"><i class="fa fa-home"></i> Home</a></li>
    <li class="active"><?php echo e($menu->name); ?></li>
    </ol>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <style>
        .list-group{}
        .list-group-item{
            padding: 0px;
            height: 50px;
            line-height: 40px;
            text-align: center;
           
            margin: 0;
            border-width: 2px;
        }
        .list-group-item img {
            float: left;
            width: 30px;
            line-height: 50px;
            margin-top: 5px;
            margin-right: 15px;
            display: none;
        }
        .list-group-item a{font-weight: bold;display: block;padding: 5px;}
        .list-group-item a:hover{}
        .sub-menu-list{width:50%;margin:0 auto;}
        .sub-menu-list .panel-heading{background:#ec2c2d;padding:0;}
        .sub-menu-list .panel-heading:hover{background:#000;}
        .sub-menu-list .panel-heading h4{color:#fff;}
        .sub-menu-list .panel-heading h4 a{display: block;padding: 10px;text-align: center}
        .sub-menu-list .panel-heading h4 a:hover{color:#fff;}
        .sub-menu-list .col-sm-6,.sub-menu-list .col-sm-12 {margin-bottom:4px;}
        @media (max-width: 500px) {
            .sub-menu-list{width:80%;}

        }
    </style>
    <?php
    $color = ['#fff','#d3fff7','#ffc7c7','#fff2b1','#b7bff9','#ecc7ff','#eee'];
    $color2 = ['#e1f7df','#d9f3fd','#fffdeb','#f7fffe','#f7e8fd','#eafbea','#ccc'];
    $colorIcon = ['#1f6fd2','#4fbebd','#ff7b49','#05b502','#9ba502'];
    ?>
    <div class="sub-menu-list">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="row">
                    <div class="col-sm-<?php echo e((count($subMenu)%2==0)?'12':'6'); ?>">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a href="<?php echo e(url('home')); ?>">Home</a>
                                </h4>
                            </div>
                        </div>
                    </div>
              
                
    
                <?php $__currentLoopData = $subMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (app('laravel-acl.directives.canAtLeast')->handle(json_decode($data->slug,true))): ?>  
                    <div class="col-sm-6">
                    <div class="panel panel-danger">
                    <div class="panel-heading" role="tab" id="heading<?php echo e($key); ?>">
                        <h4 class="panel-title">
                            <?php if(count($data->subSubMenu)>0): ?>
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo e($key); ?>" aria-expanded="false" aria-controls="collapse<?php echo e($key); ?>"><?php echo e($data->name); ?></a>
                            <?php else: ?> 
                            <a href='<?php echo e(url("$data->url")); ?>'><?php echo e($data->name); ?></a>
                            <?php endif; ?>
                        </h4>
                        </div>
                        <?php if(count($data->subSubMenu)>0): ?>
                        <div id="collapse<?php echo e($key); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo e($key); ?>">
                            <div class="panel-body">
                                <ul class="list-group">
                                    <?php $__currentLoopData = $data->subSubMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-group-item"><a href='<?php echo e(url("$sData->url")); ?>'><?php echo e($sData->name); ?> </a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                
                </div>
                <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
    </div>
    <div class="main-dashboard-content" style="display:none">
        <div class="card" style="">
            <a href="<?php echo e(url('dashboard')); ?>">
                <img src='<?php echo e(asset("images/img/pieChart.png")); ?>' class="img-responsive">
                <div class="text-content">
                    <h5 class="title">Dashboard</h5>
                </div>
            </a>
        </div>
        <div class="card" style="">
            <a href="<?php echo e(url('home')); ?>">
                <span class="box-icon" style="background:<?php echo e($colorIcon[array_rand($colorIcon,1)]); ?>">
                    <i class="fa fa-home"></i>
                </span>
                <div class="text-content">
                    <h5 class="title">Home</h5>
                </div>
            </a>
        </div>
        <?php $__currentLoopData = $subMenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (app('laravel-acl.directives.canAtLeast')->handle(json_decode($data->slug,true))): ?>
            <?php
            if($key%2==0){
                $bg = $color[array_rand($color,1)];
            }else{
                $bg = $color2[array_rand($color2,1)];
            }
            $url = MyHelper::slugify($data->name);
            $menuUrl = MyHelper::slugify($menu->name);
            if(count($data->subSubMenu)>0){
                $aurl = url("home/$menuUrl/$url?id=$data->id");  
                
            }else{

                $aurl = url($data->url);
            }
            ?>
            <div class="card" style="">
            <a href="<?php echo e($aurl); ?>">
                    <?php if($data->big_icon!='' && file_exists($data->big_icon)): ?>
                        <img src='<?php echo e(asset("$data->big_icon")); ?>' class="img-responsive">
                    <?php else: ?>
                        <span class="box-icon" style="background:<?php echo e($colorIcon[array_rand($colorIcon,1)]); ?>">
                    <i class="<?php echo e(($data->icon_class!=''?$data->icon_class:'fa fa-folder')); ?>"></i>
                </span>
                    <?php endif; ?>
                    <div class="text-content">
                        <h5 class="title"><?php echo e($data->name); ?></h5>
                    </div>
                    <h4 class="chevron">
                        <i class="fa fa-angle-up"></i>
                    </h4>
                </a>
            </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $('.card').on('mouseover',function(){
            $(this).addClass('expanded')
        })
        $('.card').on('mouseleave',function(){
            $(this).removeClass('expanded')
        })
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/home/subMenu.blade.php ENDPATH**/ ?>