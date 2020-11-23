<!DOCTYPE html>
<!-- saved from url=(0046)https://adminlte.io/themes/AdminLTE/index.html -->
<html style="height: auto; min-height: 100%;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Diamond Jubilee 2020 | Sholla High School & College</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="shortcut icon" href="<?php echo e(asset($info->favicon)); ?>">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/font-awesome.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/ionicons.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/style.min.css')); ?>">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/_all-skins.min.css')); ?>">
    <?php echo $__env->yieldContent('style'); ?>
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/morris.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/select2.min.css')); ?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/jquery-jvectormap.css')); ?>">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/bootstrap-datepicker.min.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/daterangepicker.css')); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/bootstrap3-wysihtml5.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/j-pro-modern.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/buttons.dataTables.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('public/datepicker/daterangepicker.css')); ?>">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/custom.css')); ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="<?php echo e(asset('public/backend/assets/css')); ?>">
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
      <style>
        .user-menu .dropdown-menu.profile-dropdown{width:175px;top:101%;}
      .user-menu ul li a{display: block;border-bottom: 1px solid #ddd;padding: 6px 10px;}
      .unread{background:#f1f1f1;}
      </style>
</head>



<body class="sidebar-mini custom-design wysihtml5-supported skin-black-light fixed sidebar-collapse" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo e(URL::to('/home')); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">
                <img src="<?php echo e(asset('images/img/icon-white.png')); ?>" style="width:40px;"/>
            </span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
                <img src="<?php echo e(asset($info->logo)); ?>" style="width: 200px;">
            </span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
           <div class="search-area">
              <span class="logo-lg">
                  <img src="<?php echo e(asset($info->logo)); ?>" style="max-width:200px">
              </span>
                
            </div>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o" style="color:red"></i>
                      <span class="label label-primary"><?php echo e($totalNotifications>0?$totalNotifications:''); ?></span>
                      </a>
                      <ul class="dropdown-menu">
                        <li class="header">You have <?php echo e($totalNotifications>0?$totalNotifications:'no'); ?> notifications</li>
                        <li>
                          <!-- inner menu: contains the actual data -->









                        </li>
                      <li class="footer"><a href="<?php echo e(url('notifications')); ?>">View all</a></li>
                      </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="top-logout hidden">
                    <a href="<?php echo e(url('/logout')); ?>" ><i class="fa fa-sign-out"></i><b> Logout</b></a>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="/dashboard" class="dropdown-toggle" data-toggle="dropdown">
                            <?php if(Auth::user()->image!=null): ?>
                            <img src="<?php echo e(asset(Auth::user()->image)); ?> "  class ="user-image" alt="User Image">
                            <?php else: ?>
                                <i class="fa fa-user-circle" aria-hidden="true"></i>
                            <?php endif; ?>
                            <span class="hidden-xs"><?php echo e(Auth::user()->name); ?></span>
                        </a>
                        <ul class="dropdown-menu profile-dropdown">
                            <!-- User image -->
                            <li><a href="<?php echo e(URL::to('user-profile')); ?>" class=""><i class="fa fa-user-circle" aria-hidden="true"></i> Profile</a></li>
                            <li><a href="<?php echo e(URL::to('user-profile/password')); ?>" class=""><i class="fa fa-key"></i> Change Password</a></li>
                            <li><a href="<?php echo e(URL::to('logout')); ?>" class=""><i class="fa fa-sign-out"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>




    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <?php echo $__env->make('backend._partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 532px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <?php echo $__env->yieldContent('breadcrumb'); ?>
        </section>

        <!-- Main content -->
            <?php echo $__env->yieldContent('content'); ?>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php echo $__env->make('backend._partials.notification-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
  <footer class="main-footer" style="display:none">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong style="display:none">Copyright © 2019 <a href="https://eduleam.com/" target="_blank">Edu Leam</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script async="" src="<?php echo e(asset('public/backend/assets/analytics.js')); ?>"></script>

<script src="<?php echo e(asset('public/backend/assets/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/assets/jQuery.print.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/assets/excel/xlsx.core.min.js')); ?>"></script>
<?php echo $__env->yieldContent('print-script'); ?>

<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('public/backend/assets/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<?php echo $__env->yieldContent('dataTableScript'); ?>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(asset('public/backend/assets/bootstrap.min.js')); ?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo e(asset('public/backend/assets/raphael.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/assets/Chart.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/assets/morris.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('public/backend/assets/jquery.sparkline.min.js')); ?>"></script>
<!-- jvectormap -->
<script src="<?php echo e(asset('public/backend/assets/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/assets/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('public/backend/assets/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('public/backend/assets/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/backend/assets/daterangepicker.js')); ?>"></script>
<!-- datepicker -->
<script src="<?php echo e(asset('public/backend/assets/bootstrap-datepicker.min.js')); ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo e(asset('public/backend/assets/bootstrap3-wysihtml5.all.min.js')); ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo e(asset('public/backend/assets/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(asset('public/backend/assets/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('public/backend/assets/adminlte.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/tinymce/tinymce.min.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('public/backend/assets/dashboard.js')); ?>"></script>

<script src="<?php echo e(asset('public/backend/assets/select2.full.min.js')); ?>"></script>

<script src="<?php echo e(asset('public/backend/assets/sweetalert2.all.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/datepicker/daterangepicker.js')); ?>"></script>
<script async="" src="<?php echo e(asset('public/js/html2pdf.bundle.min.js')); ?>"></script>

<script async="" src="<?php echo e(asset('public/backend/assets/custom.js')); ?>"></script>




<div class="daterangepicker dropdown-menu ltr opensleft"><div class="calendar left"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_start" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"></div></div><div class="calendar right"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"></div></div><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="Last 30 Days">Last 30 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom Range">Custom Range</li></ul><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" disabled="disabled" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div><div class="jvectormap-label" style="display: none; left: 631.016px; top: 335px;">United States of America: 398 new visitors</div>


<script>
  $('form').on('submit',function(){
      var button = $(this).find('button[type=submit]')
      button.html('<i class="fa fa-spinner fa-pulse"></i> In progress')
      button.attr('type','button')
  })


    /* Tinymce With photo */
    tinymce.init({
        selector: '.tinymce',
        menubar: false,
        theme: 'modern',
        plugins: 'image code link lists textcolor imagetools colorpicker ',
        browser_spellcheck: true,
        toolbar1: 'formatselect | bold italic strikethrough | link image | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
        // enable title field in the Image dialog
        image_title: true,
        // enable automatic uploads of images represented by blob or data URIs
        automatic_uploads: true,
        // URL of our upload handler (for more details check: https://www.tinymce.com/docs/configure/file-image-upload/#images_upload_url)
        // images_upload_url: 'postAcceptor.php',
        // here we add custom filepicker only to Image dialog
        file_picker_types: 'image',
        // and here's our custom image picker
        file_picker_callback: function(cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', 'image/*');

            // Note: In modern browsers input[type="file"] is functional without
            // even adding it to the DOM, but that might not be the case in some older
            // or quirky browsers like IE, so you might want to add it to the DOM
            // just in case, and visually hide it. And do not forget do remove it
            // once you do not need it anymore.

            input.onchange = function() {
                var file = this.files[0];

                var reader = new FileReader();
                reader.onload = function () {
                    // Note: Now we need to register the blob in TinyMCEs image blob
                    // registry. In the next release this part hopefully won't be
                    // necessary, as we are looking to handle it internally.
                    var id = 'blobid' + (new Date()).getTime();
                    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                    var base64 = reader.result.split(',')[1];
                    var blobInfo = blobCache.create(id, file, base64);
                    blobCache.add(blobInfo);

                    // call the callback and populate the Title field with the file name
                    cb(blobInfo.blobUri(), { title: file.name });
                };
                reader.readAsDataURL(file);
            };

            input.click();
        }
    });
</script>

<script type="text/javascript">

    $('.singleDatePicker').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true,
        autoUpdateInput: false,
        locale: {
            format: 'DD-MM-YYYY',
        }
    })

    $('.singleDatePicker').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('DD-MM-YYYY'));
    });
    //Initialize Select2 Elements
    $('.select2').select2({
      placeholder: "Select option"
    })
</script>



    
    
        
        
            
        
    
    


  <?php if(Session::has('success')): ?>
    <script type="text/javascript">
        swal({
            type: 'success',
            title: '<?php echo e(Session::get("success")); ?>',
            showConfirmButton: true,
        })
    </script>
  <?php endif; ?>

  <?php if(Session::has('error')): ?>
    <script type="text/javascript">
        swal({
            type: 'error',
            title: '<?php echo e(Session::get("error")); ?>',
            showConfirmButton: true
        })
    </script>
  <?php endif; ?>
  <script type="text/javascript">
      function deleteConfirm(id){
          swal({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
              if (result.value) {
              $("#"+id).submit();
          }
      })
      }

      //  Student Activation Warning -------------
      function activationConfirm(id){
          swal({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, active  ist!'
          }).then((result) => {
              if (result.value) {
              $("#"+id).submit();
          }
      })
      }

  </script>



          <script type="text/javascript">

                 function photoLoad(input,image_load) {
                      var target_image='#'+$('#'+image_load).prev().children().attr('id');

                      if (input.files && input.files[0]) {
                          var reader = new FileReader();

                          reader.onload = function (e) {
                              $(target_image).attr('src', e.target.result);
                          };
                          reader.readAsDataURL(input.files[0]);
                      }
                  }
                  var home = "<?php echo e(url('home')); ?>"
              $('ol.breadcrumb li:first-child').html('<a href="'+home+'"><img src="<?php echo e(asset('images/default/home.png')); ?>" class="img-responsive"> Home</a>');
          </script>


          <?php echo $__env->yieldContent('script'); ?>


</body>
</html>
<?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/app.blade.php ENDPATH**/ ?>