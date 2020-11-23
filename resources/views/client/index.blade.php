
@extends('client.app')
@section('content')

    <style>
        .text-danger{
            color: #dcff1b!important;
        }
        lable{
            color: #ffffff !important;
            text-align: left !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button{
            min-width: 1em;
            padding: 2px 10px;
        }
        .table{
            border:1px solid #000000;
        }
        .table th, .table td{
            padding:3px;
            border:1px solid #989898;
        }
        .reg-header{
            background-color: #f44336d6;
            padding: 10px;
            margin: 0px;
        }
        .form-body{
            padding: 15px;
        }

        .card{
            box-shadow: 0px 20px 14px 1px rgba(0,0,0,0.75);
            -webkit-box-shadow: 0px 20px 14px 1px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 20px 14px 1px rgba(0,0,0,0.75)
        }
        .payment-notes h6, .payment-notes p{
            text-align:left !important;
        }



    </style>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <img src="{{asset('images/default/Front-page.png')}}" class="img-responsive img-thumbnail  banner-img" title="Diamond Jubilee 2020 Sholla High School & College" alt="Diamond Jubilee 2020 Sholla High School & College ">
            </div>
        </div>
    </div>

     {{--Registraton Section--}}
    <div class="container">

        <div class="row">
            <div class="col-md-4 col-lg-4 relative form-area">

                    <div class="" style="background-color: #016eb1;padding: 10px;margin: 0px;">
                        <h6 class=" mt-0 text-center" style="color: #ffffff;"> Payment System of Registration Fee </h6>
                    </div>

                    <div class="form-body payment-notes" style="color: #af0069">
                        <h6> ১। Pay by Bank </h6>
                            <p style="font-size: 16px;">
                                Diamond Jubilee-2020, A/C No. - 0200014451945, Agrani Bank Ltd., Nawabgonj (Kolakopa) Branch, Dhaka.
                            </p>

                        <h6> ২। Pay by bKash </h6>
                        <p style="font-size: 16px;">bKash (Personal) - 01913 857 959</p>

                        <h6 style="color:red">Notes</h6>
                        <p style="font-size: 13px;">
                            ১। ‌বিকা‌শে পে‌মেন্ট এর ক্ষে‌ত্রে চার্জসহ রে‌জি: ফি প‌রি‌শোধ করুন এবং বিকাশ নাম্বা‌রে কল ক‌রে কনর্ফাম করুন |
                        </p>


                        <h6>Contact us with following address:</h6>
                        <p>
                            <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 01811 333 794 ( Rakimat Hossain )</span> <br>
                            <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 01913 857 959 ( Mahmud Hoque Rasel )</span>
                        </p>

                    </div>

            </div>

            <div class="col-md-8 col-lg-8 relative form-area">
                    {!! Form::open(['url'=>'registration','method'=>'POST','id'=>'registration-from','class'=>'pb_form_v1 registration-from','files'=>true]) !!}

                    <div class="reg-header">
                        <h4 class=" mt-0 text-center online-booking ">  DIAMOND JUBILEE-2020</h4>
                        <h5 class=" mt-0 text-center online-booking ">  SHOLLA HIGH SCHOOL & COLLEGE</h5>
                        <h5 class=" mt-0 text-center online-booking ">  Online Registration</h5>
                    </div>


                    <div class="form-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group  {{ $errors->has('name') ? 'has-error' : '' }}">
                                    <input type="text" name="name" value="{{old('name')}}" id="full_name" required class="form-control form-control-sm pb_height-50 reverse" placeholder="Enter Full Name">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group  {{ $errors->has('father_name') ? 'has-error' : '' }}">
                                    <input type="text" name="father_name" value="{{old('father_name')}}"  required class="form-control pb_height-50 reverse" placeholder="Your Guardian Name">
                                    @if ($errors->has('father_name'))
                                        <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('father_name') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>
                        </div> <!--end row-->



                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    {{Form::number('mobile_no',$value=old('mobile_no'),['id'=>'studentMobile','min'=>0,'class'=>'form-control pb_height-50 reverse','required'=>true,'placeholder'=>'Enter your mobile no.'])}}

                                    <span id="mobileError" class="text-danger"></span>

                                    @if ($errors->has('mobile_no'))
                                        <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('mobile_no') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    {{Form::select('student_category',['1'=>'Ex-student','2'=>'Running Student'],[],['id'=>'studentCategory','class'=>'form-control pb_height-50 reverse','required'=>true,'placeholder'=>'-Registration Type-','id'=>'studentCategory'])}}

                                    @if ($errors->has('student_category'))
                                        <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('student_category') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>

                        </div><!--end row-->



                        <div style="display: none" id="exStdGuestRow">
                            <div class="row">

                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group">
                                        {{Form::select('batch_id',$batches,[],['id'=>'batchId','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select Batch-','required'=>false])}}

                                        @if ($errors->has('batch_id'))
                                            <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('batch_id') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group">
                                        {{Form::select('spouse',['0'=>'No Spouse','1'=>'Yes Spouse',],[],['id'=>'spouse','class'=>'form-control pb_height-50 reverse','placeholder'=>'Have Spouse ?','required'=>false])}}

                                        @if ($errors->has('spouse'))
                                            <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('spouse') }}</strong>
                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group">
                                        {{Form::select('children',['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5],[],['id'=>'children','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Number of Children-','required'=>false])}}

                                        @if ($errors->has('children'))
                                            <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('children') }}</strong>
                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-3">
                                    <div class="form-group">
                                        {{Form::select('exStdGuest',['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10],[],['id'=>'exStdGuest','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Number of Guest-','required'=>false])}}

                                        @if ($errors->has('exStdGuest'))
                                            <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('exStdGuest') }}</strong>
                        </span>
                                        @endif
                                    </div>
                                </div>

                            </div><!--end row-->
                        </div>


                        <div style="display: none" id="runnigStdguestRow">

                            <div class="row">

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        {{Form::select('class_name',['Six'=>'Six','Seven'=>'Seven','Eight'=>'Eight','Nine'=>'Nine','Ten'=>'Ten','Eleven'=>'Eleven','Twelve'=>'Twelve','Honours'=>'Honours','Masters'=>'Masters'],[],['id'=>'className','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select Study Class-','required'=>false])}}

                                        @if ($errors->has('class_name'))
                                            <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('class_name') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-4" style="display: none">
                                    <div class="form-group">
                                        {{Form::select('batch_id',$batches,[],['id'=>'runningStdbatchId','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select Batch-','required'=>false])}}

                                        @if ($errors->has('batch_id'))
                                            <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('batch_id') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        {{Form::select('runnigStdguest',['1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10],[],['id'=>'runnigStdguest','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Number of Guest-','required'=>false])}}

                                        @if ($errors->has('runnigStdguest'))
                                            <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('runnigStdguest') }}</strong>
                        </span>
                                        @endif
                                    </div>
                                </div>



                            </div><!--end row-->
                        </div>


                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group  {{ $errors->has('district_id') ? 'has-error' : '' }}">
                                    {{Form::select('district_id',$district,[],['id'=>'districtId','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select District-','required'=>true])}}

                                    @if ($errors->has('district_id'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('district_id') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group  {{ $errors->has('thana_upazila_id') ? 'has-error' : '' }}" id="thanaList">
                                    {{Form::select('thana_upazila_id',[],[],['class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select district first !-','required'=>true])}}

                                    @if ($errors->has('thana_upazila_id'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('thana_upazila_id') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group  {{ $errors->has('union_id') ? 'has-error' : '' }}" id="unionList">


                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group  {{ $errors->has('union_id') ? 'has-error' : '' }}" id="villageList">

                                </div>
                            </div>
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="form-group  {{ $errors->has('address') ? 'has-error' : '' }}">
                                    <input type="text" name="address" value="{{old('address')}}" id="address" required class="form-control form-control-sm pb_height-50 reverse" placeholder="Enter Present Address">
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group  {{ $errors->has('payment_method') ? 'has-error' : '' }}">
                                    {{Form::select('payment_method',['bKash'=>'bKash','Cash'=>'Cash','Bank'=>'Bank'],[],['id'=>'paymentMethod','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Payment Method !-','required'=>true])}}

                                    @if ($errors->has('payment_method'))
                                        <span class="help-block">
                        <strong>{{ $errors->first('payment_method') }}</strong>
                    </span>
                                    @endif
                                </div>
                            </div>

                        </div> <!--end row-->



                        <div class="form-group row">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label class="slide_upload profile-image" for="file"> Upload photo
                                        <img id="image_load" src="{{asset('images/default/photo.png')}}" style="max-width: 120px;border: 2px dashed #2783bb; cursor: pointer">
                                    </label>

                                    <input id="file" style="display:none" name="image" type="file" onchange="photoLoad(this,this.id)" accept="image/*">

                                </div>
                            </div>

                            <div class="col-md-4 no-padding">
                                <br>
                                <h6 style="display: none;color: red" id="imageError">Photo not more than 512 kb,
                                    <a href="https://picresize.com" target="_blank"> Click here to resize your photo</a>
                                </h6>
                                <button class="btn btn-default btn-black register-btn" id="nextbtn" type="button"> <b> SUBMIT </b></button>

                            </div>
                            <div class="col-md-4">
                                <br>
                                 <a href="{{URL::to('/')}}" > <i class="fa fa-refresh"></i> Refresh Page</a>
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

                                    <div class="col-md-12">
                                        <h5>Ticket & Registration info</h5>
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
                                        <h4 id="image-notifications" style="display: none;color: red"> Please upload your photo</h4>

                                    </div>

                                <div class="form-group row">
                                    <div class="col-md-12 text-right">

                                        <h6 style="text-align: left;line-height: 25px;color: #bb3f03;">‌রে‌জি: ফি প্রদানের উপায়: <br>১। Diamond Jubilee-2020, A/C No. - 0200014451945, Agrani Bank Ltd., Nawabgonj (Kolakopa) Branch, Dhaka. <br>২। বিকাশ (পা‌র্সোনাল) - 01913 857 959
                                        </h6>

                                        <button ty class="btn btn-default btn-black"  type="submit"> <b> SUBMIT </b></button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    </div>


                {!! Form::close() !!}
            </div>

        </div>
    </div>


    <div class="container">
        <hr>
        <div class="row">

            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <div class="card" style="background-color: #9a007f">
                        <div class="card-header"><i class="fa fa-archive" aria-hidden="true"></i> Total Summary  </div>
                        <div class="card-body">

                            Members: {{$members}},
                            Guest: {{$totalMembers->totalGuest}}, <br> Spouse: {{$totalMembers->totalSpouse}}, Children: {{$totalMembers->totalChildren}} <br>
                            <strong>Total: {{$members+$totalMembers->totalGuest+$totalMembers->totalSpouse+$totalMembers->totalChildren}}</strong>

                        </div>
                        <div class="card-footer"> <a style="color: #f1f1f1">Diamond Jubilee-2020 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                <div class="card" style="background-color: #d26902;">
                    <div class="card-header"><i class="fa fa-clock-o" aria-hidden="true"></i> Pending Summary  </div>
                    <div class="card-body">
                        Members: {{$pendingMembers}},
                        Guest: {{$pendingData->totalGuest}}, <br> Spouse: {{$pendingData->totalSpouse}}, Children: {{$pendingData->totalChildren}} <br>
                        <strong>Total: {{$pendingMembers+$pendingData->totalGuest+$pendingData->totalSpouse+$pendingData->totalChildren}}</strong>
                    </div>
                    <div class="card-footer"> <a  style="color: #f1f1f1">Diamond Jubilee-2020 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> </div>
                </div>
            </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                <div class="card" style="background-color: #01983a;">
                    <div class="card-header"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Confirmed Summary  </div>
                    <div class="card-body">

                        Members: {{$confirmedMembers}},
                        Guest: {{$confirmedData->totalGuest}}, <br> Spouse: {{$confirmedData->totalSpouse}}, Children: {{$confirmedData->totalChildren}} <br>
                        <strong>Total: {{$confirmedMembers+$confirmedData->totalGuest+$confirmedData->totalSpouse+$confirmedData->totalChildren}}</strong>

                    </div>
                    <div class="card-footer"> <a  style="color: #f1f1f1">Diamond Jubilee-2020 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> </div>
                </div>
            </div>
            </div>
        </div>

        </div>
    </div>




    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-12 table-responsive">
                <table id="registrationData" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                    <tr>
                        <th width="1%">Sl.No</th>
                        <th>Name</th>
                        <th>Guardian Name</th>
                        <th>Mobile</th>
                        <th>Batch / Class</th>
                        <th>Village</th>
                        <th>Union</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>



    <!-- The  registration check  Modal -->
    <div class="modal fade @error('email') show @enderror" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  data-keyboard="false" data-backdrop="static" @error('email') style="display:block" @enderror>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #4682ff;font-weight: bold;">
                <h5 class="modal-title" id="myModalLabel" style="color:#fff;">Registration Status Action</h5>
                <button style="color:#fff" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="POST" action="{{ route('password.email') }}" id="forgot-form">
                @csrf
                <div class="modal-body">

                    <div class="form-group row">
                        <label for="mobile" class="col-md-12 col-form-label">{{ __('Mobile number') }}</label>

                        <div class="col-md-12">
                            <input id="mobile"  type="number" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your mobile number" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <span class="text-danger custom-email-error"></span>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <label for="email" class="col-md-12 col-form-label">{{ __('Code') }}</label>

                        <div class="col-md-12">
                            <input id="code"  type="number" class="form-control @error('code') is-invalid @enderror" name="code" placeholder="Enter registration code"
                                   value="{{ old('code') }}" required autocomplete="email" autofocus>

                            <div>
                                <hr>
                                <h6 id="errorrResult" style="color: red"></h6>
                                <h6 id="result" class="text-success"></h6>

                            </div>

                            @error('number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-md-12 text-right">
                            <button type="button" id="forgot-reset-button" class="btn btn-primary pull-right"><b>Submit</b></button>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
    </dev>





@endsection

@section('script')

    <script>

        $('form').submit(function () {

            $(':submit').html('<i class="fa fa-spinner fa-pulse" aria-hidden="true"></i> In Progress')
            $(':submit').attr('type','button')
        })


        $('#studentCategory').on('change',function () {

            var studentCategory=$(this).val()

            if(studentCategory==1){

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


        //if($('#studentMobile').val()==''|| $('#studentCategory').val()=='' || $('#villageId').val()=='' || $('#full_name').val()=='' || $('#districtId').val()==''){
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
            else if( $('#studentCategory').val()==1 && $('#batchId').val()==''){
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

                if ($('#studentCategory').val()==1){

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

                }

                $('#formConfirmation').modal('show')


            }



        })

//        }else{
//            $('#nextbtn').attr('disabled',false)
//        }



    </script>

    <script>
        $(function() {
            $('#registrationData').DataTable( {
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: "{{url('/show-registration-data')}}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    { data: 'name',name:'users.name'},
                    { data: 'father_name',name:'user_infos.father_name'},
                    { data: 'mobile_no',name:'users.mobile_no'},
                    { data: 'batch_name'},
                    { data: 'village',name:'villages.village'},
                    { data: 'union',name:'unions.union'},
                    { data: 'Status'},

                ]
            });
        });
    </script>


    <script>

        $( document ).ready(function() {

            $('#checkStatsModal').on('click',function () {
                $('#mobile').val('')
                $('#code').val('')

                $('#errorrResult').empty().html('')
                $('#result').empty().html('')

                $('#myModal').modal('show')

            })




            $('#forgot-reset-button').on('click',function () {

                $.ajax({
                    url:'{{url("/check-registration-status")}}'+'/'+$('#mobile').val()+'/'+$('#code').val() ,
                    type: 'GET',
                    'dataType' : 'json',
                    success: function(data) {

                        $('#errorrResult').empty().html('')
                        $('#result').empty().html('')

                        if (data.data==''){
                            $('#errorrResult').empty().html('Mobile number or Code does not match ')

                        }else if (data.data.status==0){
                            $('#result').empty().html(data.data.name+' Your registration waiting for approval')

                        }else if (data.data.status==1){
                            $('#result').empty().html(data.data.name+' Your registration partially approved with payment')
                        }
                        else if (data.data.status==2){
                            $('#result').empty().html(data.data.name+' Your registration fully approved, Please collect ticket')
                        }
                        else if (data.data.status==3){
                            $('#result').empty().html(data.data.name+' Your registration is rejected some reason')
                        }
                    }
                })
            })
        });
    </script>


    <script>

        $('#studentMobile').on('blur',function () {

            if (Number($('#studentMobile').val().length<11) || Number($('#studentMobile').val().length>11) || $('#studentMobile').val().substring(0, 2)!=='01'){
                $('#mobileError').html('Valid Mobile Number must be 11 digit')
                $('#nextbtn').attr('disabled',true)
                return true;
            }else {
                $('#mobileError').html('')
                $('#nextbtn').attr('disabled',false)
            }


            {{--$.ajax({--}}
                {{--url:'{{url("/check-unique-user")}}'+'/'+$('#studentMobile').val() ,--}}
                {{--type: 'GET',--}}
                {{--'dataType' : 'json',--}}
                {{--success: function(data) {--}}
                    {{--if (data.userData===null){--}}
                        {{--$('#nextbtn').attr('disabled',false)--}}
                        {{--$('#mobileError').html('')--}}
                    {{--}else {--}}
                        {{--$('#nextbtn').attr('disabled',true)--}}
                        {{--$('#mobileError').html('Mobile Number Already Taken')--}}
                    {{--}--}}
                {{--}--}}
            {{--})--}}
        })




        $('#districtId').on('change',function () {
            $('#unionId').val('')
            $('#villageId').val('')

            $('#unionId').css('display','none')
            $('#villageId').css('display','none')


            var district=$(this).val()

            $('#thanaList').empty().load('{{URL::to("/load-thana")}}/'+district)
        })

    </script>
@endsection
