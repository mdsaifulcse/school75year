
@extends('client.app')
@section('content')
    <style type="text/css">body{background: #fff;}</style>

    <div class="row">
        <div class="col-md-2 no-padding">
            @include('client.includes.sidebar')
        </div>


        <div class="col-md-1"></div>
        <div class="col-md-8 user-dashboard-box relative form-area">
            <h6 class="text-center font-15"> <strong >REGISTRATION FORM</strong> <span class="text-primary font-15" style="font-weight: bold; font-size: 25px "> IBA BBA Admission </span> </h6>
            {!! Form::open(['url'=>'final-register','method'=>'POST','class'=>'pb_form_v1','files'=>'true'])  !!}

            <div>
                <label class="form-step active"><span class="text">1</span> <span class="bar"></span> </label>
                <label class="form-step"><span class="text">2</span> <span class="bar"></span> </label>
                <label class="form-step"><span class="text">3</span> <span class="bar"></span> </label>
            </div>
            <h3 class="mb-2 mt-0 text-center online-booking"> <b> Personal Information </b></h3>
            <div class="form-group row mb-2">

                <div class="col-md-4 mb-2"> <input class="form-control" readonly  value="{{Auth::user()->name}}" /> </div>


                <div class="col-md-4 mb-2"> <input class="form-control" readonly  value="{{Auth::user()->mobile_no}}" /> </div>

                <div class="col-md-4">

                    <select name="gender" class="form-control pb_height-50 reverse" required>
                        <option value="" selected="">-Gender-</option>
                        <option {{(isset($info->gender) && $info->gender=='Female' )?'selected':''}} value="Female">Female</option>
                        <option {{(isset($info->gender) && $info->gender=='Male' )?'selected':''}} value="Male">Male</option>


                    </select>

                </div>



            </div>
            <div class="form-group row">
                <div class="col-md-4 mb-2">

                    <textarea required  name="address"  rows="1"  class="form-control reverse" placeholder="Address">{{isset($info->address)?$info->address:''}}</textarea>
                    @if ($errors->has('address'))
                        <span class="help-block text-warning">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                    @endif
                </div>

                <div class="col-md-4 mb-2">

                    <input type="email" required name="email" value="{{Auth::user()->email}}" class="form-control pb_height-50 reverse" placeholder="Email">
                </div>

                <div class="col-md-4 mb-2">

                    <input type="text" name="birthday" id="singleDatePicker" value="{{isset($info->birthday)?date('d-m-Y',strtotime($info->birthday)):''}}"  class="form-control pb_height-50 reverse" placeholder="Date of Birth" autocomplete="off" required>
                </div>

            </div>
            <div class="form-group row">
                <input type="hidden" name="step" value="1">
                <div class="col-sm-12">

                    <label class="user_upload" for="file">

                        @if(Auth::user()->image!=null)
                            <img id="image_load" src="{{asset(Auth::user()->image)}}" style="width: 70px;">
                        @else
                            <img id="image_load" src="{{asset('images/default/photo1.png')}}" style="width:70px;height: 80px;">
                        @endif
                    </label>

                    <input id="file" style="display:none" class="form-control " @if(Auth::user()->image==null) required="required" @endif
                    name="image" type="file" onchange="photoLoad(this,this.id)">
                    @if(Auth::user()->image==null)
                        <span class="text-danger" style="display: none" id="image-notifications"> Image empty! </span>
                        @endif


                    <button style="margin-top:25px" class="pull-right btn btn-warning next_btn"  id="nextbtn" type="submit"> <b> Next </b></button>
                </div>

            </div>

            <div class="sub-heading">

            </div>
        {!! Form::close() !!}

        <!--       <div class="footer_end">
            <div class="footer_left col-md-5 pull-left">

                    <h3>Why Join Patronus</h3>

            </div>
             <div class="footer_right col-md-7 pull-right">
                <div class="row">
                        <ul>
                   <li><img src="{{asset('images/img/favicon1.png')}}"><p>Taught by the best instructors currently studying in IBA, DU</p></li>
                   <li><img src="{{asset('images/img/favicon1.png')}}"><p>Individual attention to each candidate, through our state-of-theart digital teaching platform</p></li>
               </ul>
                </div>
            </div>

        </div> -->
        </div>
    </div>
@stop
@section('script')

    <script type="text/javascript">
        $(document).ready(function() {
            $('#nextbtn').on("click",function()
            {
                var imgVal = $('[type=file]').val();
                if(imgVal=='')
                {
                    $('#image-notifications').show();
                    return true;
                }else{
                    $('#image-notifications').hide();
                }


            });
        });
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


    </script>


@endsection
