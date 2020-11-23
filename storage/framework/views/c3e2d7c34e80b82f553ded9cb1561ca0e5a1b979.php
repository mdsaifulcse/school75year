

<?php $__env->startSection('breadcrumb'); ?>

    <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('home')); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#"> Registration </a></li>

    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <style>

        .table{
            border:1px solid #000000;
            color: #000000;
        }
        .table th, .table td{
            padding:3px;
            border:1px solid #989898;
        }

        .pb_form_v1{
            background: #cccaca;
            padding: 0px;
            padding-bottom: 1px;
            margin-top: 20px;
            border: 1px solid #ed584d;
            color: #ffffff;
        }
        .reg-header{
            background-color: #f44336d6;
            padding: 10px;
            margin: 0px;
        }
        .form-body{
            padding: 15px;
        }
    </style>

    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="box box-danger">
                    <div class="box-header bg-warning ">

                        <div class="box-title">
                            Registration with registration fee
                        </div>
                        <div class="box-btn pull-right">
                            <a href="<?php echo e(URL::to('/pending-applicant')); ?>" class="btn btn-primary btn-xs" >Pending List</a>
                        </div>
                    </div>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">

                                <?php echo Form::open(['route'=>'quick-registration.store','method'=>'POST','id'=>'registration-from','class'=>'pb_form_v1 registration-from','files'=>'true']); ?>

                                    <?php echo e(csrf_field()); ?>


                                    <div class="reg-header">
                                        <h4 class=" mt-0 text-center online-booking ">  DIAMOND JUBILEE-2020</h4>
                                        <h5 class=" mt-0 text-center online-booking ">  SHOLLA HIGH SCHOOL & COLLEGE</h5>
                                        <h5 class=" mt-0 text-center online-booking ">  Online Registration</h5>
                                    </div>


                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group  <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                                                    <input type="text" name="name" value="<?php echo e(old('name')); ?>" id="full_name" required class="form-control form-control-sm pb_height-50 reverse" placeholder="Enter Full Name">
                                                    <?php if($errors->has('name')): ?>
                                                        <span class="help-block">
                        <strong><?php echo e($errors->first('name')); ?></strong>
                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group  <?php echo e($errors->has('father_name') ? 'has-error' : ''); ?>">
                                                    <input type="text" name="father_name" value="<?php echo e(old('father_name')); ?>"  required class="form-control pb_height-50 reverse" placeholder="Your Father Name">
                                                    <?php if($errors->has('father_name')): ?>
                                                        <span class="help-block">
                        <strong class="text-danger"><?php echo e($errors->first('father_name')); ?></strong>
                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div> <!--end row-->



                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <?php echo e(Form::number('mobile_no',$value=old('mobile_no'),['id'=>'studentMobile','min'=>0,'class'=>'form-control pb_height-50 reverse','required'=>true,'placeholder'=>'Enter your mobile no.'])); ?>


                                                    <span id="mobileError" class="text-danger"></span>

                                                    <?php if($errors->has('mobile_no')): ?>
                                                        <span class="help-block">
                        <strong class="text-danger"><?php echo e($errors->first('mobile_no')); ?></strong>
                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>


                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <?php echo e(Form::select('student_category',['1'=>'Ex-student','2'=>'Running Student','3'=>'Teacher'],[],['id'=>'studentCategory','class'=>'form-control pb_height-50 reverse','required'=>true,'placeholder'=>'-Registration Type-','id'=>'studentCategory'])); ?>


                                                    <?php if($errors->has('student_category')): ?>
                                                        <span class="help-block">
                        <strong class="text-danger"><?php echo e($errors->first('student_category')); ?></strong>
                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                        </div><!--end row-->



                                        <div style="display: none" id="exStdGuestRow">
                                            <div class="row">

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group">
                                                        <?php echo e(Form::select('batch_id',$batches,[],['id'=>'batchId','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select Batch-','required'=>false])); ?>


                                                        <?php if($errors->has('batch_id')): ?>
                                                            <span class="help-block">
                        <strong class="text-danger"><?php echo e($errors->first('batch_id')); ?></strong>
                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group">
                                                        <?php echo e(Form::select('spouse',['0'=>'No Spouse','1'=>'Yes Spouse',],[],['id'=>'spouse','class'=>'form-control pb_height-50 reverse','placeholder'=>'Have Spouse ?','required'=>false])); ?>


                                                        <?php if($errors->has('spouse')): ?>
                                                            <span class="help-block">
                        <strong class="text-danger"><?php echo e($errors->first('spouse')); ?></strong>
                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group">
                                                        <?php echo e(Form::select('children',['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5],[],['id'=>'children','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Number of Children-','required'=>false])); ?>


                                                        <?php if($errors->has('children')): ?>
                                                            <span class="help-block">
                        <strong class="text-danger"><?php echo e($errors->first('children')); ?></strong>
                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="form-group">
                                                        <?php echo e(Form::select('exStdGuest',['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10],[],['id'=>'exStdGuest','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Number of Guest-','required'=>false])); ?>


                                                        <?php if($errors->has('exStdGuest')): ?>
                                                            <span class="help-block">
                        <strong class="text-danger"><?php echo e($errors->first('exStdGuest')); ?></strong>
                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                            </div><!--end row-->
                                        </div>


                                        <div style="display: none" id="runnigStdguestRow">

                                            <div class="row">

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <?php echo e(Form::select('class_name',['Six'=>'Six','Seven'=>'Seven','Eight'=>'Eight','Nine'=>'Nine','Ten'=>'Ten','Eleven'=>'Eleven','Twelve'=>'Twelve','Honours'=>'Honours','Masters'=>'Masters'],[],['id'=>'className','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select Study Class-','required'=>false])); ?>


                                                        <?php if($errors->has('class_name')): ?>
                                                            <span class="help-block">
                        <strong class="text-danger"><?php echo e($errors->first('class_name')); ?></strong>
                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>


                                                <div class="col-lg-4 col-md-4" style="display: none">
                                                    <div class="form-group">
                                                        <?php echo e(Form::select('batch_id',$batches,[],['id'=>'runningStdbatchId','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select Batch-','required'=>false])); ?>


                                                        <?php if($errors->has('batch_id')): ?>
                                                            <span class="help-block">
                        <strong class="text-danger"><?php echo e($errors->first('batch_id')); ?></strong>
                    </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <?php echo e(Form::select('runnigStdguest',['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10],[],['id'=>'runnigStdguest','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Number of Guest-','required'=>false])); ?>


                                                        <?php if($errors->has('runnigStdguest')): ?>
                                                            <span class="help-block">
                        <strong class="text-danger"><?php echo e($errors->first('runnigStdguest')); ?></strong>
                        </span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>



                                            </div><!--end row-->
                                        </div>


                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group  <?php echo e($errors->has('district_id') ? 'has-error' : ''); ?>">
                                                    <?php echo e(Form::select('district_id',$district,[],['id'=>'districtId','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select District-','required'=>true])); ?>


                                                    <?php if($errors->has('district_id')): ?>
                                                        <span class="help-block">
                        <strong><?php echo e($errors->first('district_id')); ?></strong>
                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group  <?php echo e($errors->has('thana_upazila_id') ? 'has-error' : ''); ?>" id="thanaList">
                                                    <?php echo e(Form::select('thana_upazila_id',[],[],['class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select district first !-','required'=>true])); ?>


                                                    <?php if($errors->has('thana_upazila_id')): ?>
                                                        <span class="help-block">
                        <strong><?php echo e($errors->first('thana_upazila_id')); ?></strong>
                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div><!--end row-->

                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group  <?php echo e($errors->has('union_id') ? 'has-error' : ''); ?>" id="unionList">


                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group  <?php echo e($errors->has('union_id') ? 'has-error' : ''); ?>" id="villageList">

                                                </div>
                                            </div>
                                        </div><!--end row-->


                                        <div class="row">
                                            <div class="col-lg-8 col-md-8">
                                                <div class="form-group  <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
                                                    <input type="text" name="address" value="<?php echo e(old('address')); ?>" id="address" required class="form-control form-control-sm pb_height-50 reverse" placeholder="Enter Present Address">
                                                    <?php if($errors->has('address')): ?>
                                                        <span class="help-block">
                        <strong><?php echo e($errors->first('address')); ?></strong>
                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4">
                                                <div class="form-group  <?php echo e($errors->has('payment_method') ? 'has-error' : ''); ?>">
                                                    <?php echo e(Form::select('payment_method',['bKash'=>'bKash','Cash'=>'Cash','Bank'=>'Bank'],[],['id'=>'paymentMethod','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Payment Method !-','required'=>true])); ?>


                                                    <?php if($errors->has('payment_method')): ?>
                                                        <span class="help-block">
                        <strong><?php echo e($errors->first('payment_method')); ?></strong>
                    </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>

                                        </div> <!--end row-->



                                        <div class="form-group row">

                                            <div class="col-md-4">
                                                <div class="form-group ">
                                                    
                                                    <label class="slide_upload profile-image" for="file"> Upload photo
                                                        <img id="image_load" src="<?php echo e(asset('images/default/photo.png')); ?>" style="max-width: 120px;border: 2px dashed #2783bb; cursor: pointer">
                                                    </label>

                                                    <input id="file" style="display:none" name="image" type="file" onchange="photoLoad(this,this.id)" accept="image/*">

                                                </div>
                                            </div>

                                            <div class="col-md-8 ">
                                                <br>
                                                <h6 style="display: none;color: red" id="imageError">Photo not more than 512 kb,
                                                    <a href="https://picresize.com" target="_blank"> Click here to resize your photo</a>
                                                </h6>
                                                <button class="btn btn-default btn-primary register-btn" id="nextbtn" type="button"> <b> SUBMIT </b></button>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="sub-heading">

                                    </div>


                                    <div class="modal fade" id="formConfirmation" role="dialog"  data-keyboard="false" data-backdrop="static">
                                        <div class="modal-dialog" role="dialog" >
                                            <div class="modal-content">
                                                <div class="modal-header" style="background: #4682ff;font-weight: bold;">
                                                    <h5 class="modal-title" style="color:#fff;">Registration Confirmation</h5>
                                                    <button style="color:#fff" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="row">
                                                    <div class="col-md-12">
                                                        <h5 style="color: #000">Ticket & Registration info</h5>
                                                        <table class="table table-border table-hover table-striped">
                                                            <thead>
                                                            <tr>
                                                                <th>Purpose</th>
                                                                <th>Ticket</th>
                                                                <th>Tk</th>
                                                                <th>Amount Tk</th>
                                                            </tr>
                                                            </thead>

                                                            <tbody>
                                                            <tr>
                                                                <td id="reg"> Registration</td>
                                                                <td id="regTicket"> 1</td>
                                                                <td id="regAmount"> </td>
                                                                <td id="regTotal"> </td>
                                                            </tr>

                                                            <tr>
                                                                <td id="spouseRet"> Spouse</td>
                                                                <td id="spouseTicket"> </td>
                                                                <td id="spouseAmount"> 1</td>
                                                                <td id="spouseTotal"> 1</td>
                                                            </tr>

                                                            <tr>
                                                                <td id="childrenReg"> Children</td>
                                                                <td id="childrenTicket"> 1</td>
                                                                <td id="childrenAmount"> </td>
                                                                <td id="childrenTotal"> </td>
                                                            </tr>

                                                            <tr>
                                                                <td id="guestReg"> Guest</td>
                                                                <td id="guestTicket"> 1</td>
                                                                <td id="guestAmount"> </td>
                                                                <td id="guestTotal"> </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-right" colspan="3">bKash Charge</td>
                                                                <td id="bkashCharge"></td>
                                                            </tr>

                                                            <tr>
                                                                <td class="text-right" colspan="3">Total</td>
                                                                <td id="totalAmount"></td>

                                                            </tr>

                                                            </tbody>

                                                        </table>

                                                    </div>
                                                    </div>

                                                    <div class=" row">

                                                        <div class="col-md-8 col-lg-8">
                                                            <div class="form-group  <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
                                                                <input type="number" name="paid"  min="0" value="<?php echo e(old('paid')); ?>" id="paidAmount" required class="form-control form-control-sm pb_height-50 reverse" placeholder="Enter Received Amount">

                                                                <?php if($errors->has('paid')): ?>
                                                                    <span class="help-block">
                        <strong><?php echo e($errors->first('paid')); ?></strong>
                    </span>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-8 col-lg-4 text-right">
                                                            <button ty class="btn btn-default btn-black"  type="submit"> <b> CONFIRM </b></button>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                <?php echo Form::close(); ?>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


    <script>

        $('#submitForm').on('click',function () {
            console.log('sdfs')

            $("#registration-from").submit();
            console.log('sdfsdddddddddd')

        })




        $('#studentCategory').on('change',function () {

            var studentCategory=$(this).val()

            if(studentCategory==1 || studentCategory==3){

                $('#batchId').attr('required',true)
                $('#batchId').attr('disabled',false)
                $('#runningStdbatchId').attr('disabled',true)

                $('#className').val('')
                $('#runnigStdguest').val('')

                $('#runnigStdguestRow').css('display','none')
                $('#exStdGuestRow').css('display','block')


            }else if(studentCategory==2){

                $('#batchId').attr('disabled',true)

                $('#runningStdbatchId').attr('disabled',false)

                $('#batchId').attr('required',false)

                $('#batchId').val('')
                $('#spouse').val('')
                $('#children').val('')
                $('#exStdGuest').val('')

                $('#runnigStdguestRow').css('display','block')
                $('#exStdGuestRow').css('display','none')

            }
        })



        $('#className').on('change',function () {


            if($('#className').val()=='Honours' || $('#className').val()=='Masters' || $('#className').val()=='Eleven' || $('#className').val()=='Twelve'){
                console.log('158')

                $('#runningStdbatchId').attr('disabled',false)
                $('#runningStdbatchId').parent().parent().css('display','block')

                $('#runningStdbatchId').parent().parent().addClass('col-lg-4 col-md-4').removeClass('col-lg-6 col-md-6')
                $('#className').parent().parent().addClass('col-lg-4 col-md-4').removeClass('col-lg-6 col-md-6')
                $('#runnigStdguest').parent().parent().addClass('col-lg-4 col-md-4').removeClass('col-lg-6 col-md-6')

            }else{
                $('#runningStdbatchId').attr('disabled',true)
                $('#runningStdbatchId').parent().parent().css('display','none')

                $('#className').parent().parent().addClass('col-lg-6 col-md-6').removeClass('col-lg-4 col-md-4')
                $('#runnigStdguest').parent().parent().addClass('col-lg-6 col-md-6').removeClass('col-lg-4 col-md-4')

            }


        })


        $('#nextbtn').on('click',function () {

            if($('#studentMobile').val()==''){

                $('#formConfirmation').modal('hide')

                alert('Please enter your mobile number ')
            }
            else if( $('#full_name').val()==''){
                $('#formConfirmation').modal('hide')

                alert('Please enter your full name')
            }
            else if($('#studentCategory').val()==''){
                $('#formConfirmation').modal('hide')

                alert('Please select student type')
            }
            else if( ($('#studentCategory').val()==1 || $('#studentCategory').val()==3) && $('#batchId').val()==''){
                $('#formConfirmation').modal('hide')

                alert('Please select batch')
            }
            else if( $('#studentCategory').val()==2 && $('#className').val()==''){
                console.log('147')
                $('#formConfirmation').modal('hide')

                alert('Please select class')
            }
            else if( $('#studentCategory').val()==2 && $('#runningStdbatchId').val()=='' && ($('#className').val()=='Honours' || $('#className').val()=='Masters' || $('#className').val()=='Eleven' || $('#className').val()=='Twelve') ){

                alert('Please select batch')

            }

            else if( $('#districtId').val()==''){
                $('#formConfirmation').modal('hide')

                alert('Please select district')
            }
            else if( $('#thanaUpazilaId').val()==''){
                $('#formConfirmation').modal('hide')

                alert('Please select thana/upzila')
            }
            else if( $('#unionId').val()==''){
                $('#formConfirmation').modal('hide')

                alert('Please select union')
            }

            else if( $('#villageId').val()==''){
                $('#formConfirmation').modal('hide')
                alert('Please select village')
            }

            else if($('#address').val()==''){
                $('#formConfirmation').modal('hide')

                alert('Please enter your present address')
            }
            else if($('#paymentMethod').val()==''){
                $('#formConfirmation').modal('hide')

                alert('Please Select Payment Method')
            }
            else{

                if ($('#studentCategory').val()==1 || $('#studentCategory').val()==3){

                    $('#regTicket').html('1')
                    $('#regAmount').html('800')
                    $('#regTotal').html('800')


                    if($('#spouse').val()==1){
                        $('#spouseTicket').html('1')
                        $('#spouseAmount').html('500')
                        $('#spouseTotal').html('500')
                        var spouseTotal=500
                        $('#spouseTicket').parent().show()
                    }else{
                        $('#spouseTicket').parent().hide()
                        var spouseTotal=0
                    }

                    if($('#children').val()!=''){
                        $('#childrenTicket').html($('#children').val())
                        $('#childrenAmount').html(200)
                        $('#childrenTotal').html(parseInt($('#children').val())*200)
                        var childrenTotal=parseInt($('#children').val())*200
                        $('#childrenTicket').parent().show()
                    }else{
                        $('#childrenTicket').parent().hide()
                        var childrenTotal=0
                    }

                    if($('#exStdGuest').val()!=''){
                        $('#guestTicket').html($('#exStdGuest').val())
                        $('#guestAmount').html(400)
                        $('#guestTotal').html(parseInt($('#exStdGuest').val())*400)
                        var guestTotal=parseInt($('#exStdGuest').val())*400
                        $('#guestTicket').parent().show()
                    }else {
                        $('#guestTicket').parent().hide()
                        var guestTotal=0

                    }

                    var bkashCharge=0;
                    var subTotal=800+parseInt(spouseTotal)+parseInt(childrenTotal)+parseInt(guestTotal);
                    if($('#paymentMethod').val()=='bKash'){
                        bkashCharge=(19*subTotal)/1000
                        $('#bkashCharge').html(parseInt(bkashCharge))
                        $('#bkashCharge').parent().show()
                    }else {
                        $('#bkashCharge').html('')
                        $('#bkashCharge').parent().hide()

                    }

                    $('#paidAmount').val(subTotal)
                    $('#paidAmount').prop('min',subTotal)
                    $('#paidAmount').prop('max',subTotal)

                    $('#totalAmount').html(parseInt(bkashCharge)+parseInt(subTotal))


                }else if($('#studentCategory').val()==2){

                    $('#childrenTicket').parent().hide()
                    $('#spouseTicket').parent().hide()

                    if ($('#className').val()=='Honours' || $('#className').val()=='Masters' || $('#className').val()=='Eleven' || $('#className').val()=='Twelve'){

                        $('#regTicket').html('1')
                        $('#regAmount').html('400')
                        $('#regTotal').html('400')
                        var regAmount=400
                    }else{
                        $('#regTicket').html('1')
                        $('#regAmount').html('200')
                        $('#regTotal').html('200')
                        var regAmount=200
                    }


                    if($('#runnigStdguest').val()!=''){
                        $('#guestTicket').html($('#runnigStdguest').val())
                        $('#guestAmount').html(400)
                        $('#guestTotal').html(parseInt($('#runnigStdguest').val())*400)
                        var guestTotal=parseInt($('#runnigStdguest').val())*400
                        $('#guestTicket').parent().show()

                    }else {
                        $('#guestTicket').parent().hide()
                        var guestTotal=0
                    }


                    var bkashCharge=0;
                    var subTotal=parseInt(regAmount)+parseInt(guestTotal);
                    if($('#paymentMethod').val()=='bKash'){
                        bkashCharge=(19*subTotal)/1000

                        $('#bkashCharge').html(parseInt(bkashCharge))
                        $('#bkashCharge').parent().show()
                    }else {
                        $('#bkashCharge').html('')
                        $('#bkashCharge').parent().hide()
                    }

                    $('#totalAmount').html(parseInt(bkashCharge)+parseInt(subTotal))

                    $('#paidAmount').val(subTotal)
                    $('#paidAmount').prop('min',subTotal)
                    $('#paidAmount').prop('max',subTotal)


                }

                $('#formConfirmation').modal('show')


            }



        })

    </script>



    <script>
        $('#studentMobile').on('blur',function () {

            if (Number($('#studentMobile').val().length<11) || $('#studentMobile').val().substring(0, 2)!=='01'){
                $('#mobileError').html('Valid Mobile Number must be 11 digit')
                $('#nextbtn').attr('disabled',true)
                return true;
            }else {
                $('#mobileError').html('')
                $('#nextbtn').attr('disabled',false)
            }


            
                
                
                
                

                    

                    
                        
                        
                    
                        
                        
                    
                
            
        })




        $('#districtId').on('change',function () {
            $('#unionId').val('')
            $('#villageId').val('')

            $('#unionId').css('display','none')
            $('#villageId').css('display','none')


            var district=$(this).val()

            $('#thanaList').empty().load('<?php echo e(URL::to("/load-thana")); ?>/'+district)
        })

    </script>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/student-register/create.blade.php ENDPATH**/ ?>