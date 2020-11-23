<div class="modal-dialog modal-md">

    <div class="modal-content printForm">

        <div class="user-dashboard-box relative form-area pb_form_v5 printarea"  id="printarea" style=" background: #fff;      padding: 20px;">
                <button type="button" class="close text-danger" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="row">
                <div class="col-md-3 print_logo">
                    <div class="logo">
                        <img src="{{asset('images/default/logo.png')}}" style="width: 80px;margin: 15px 0 0 10px;border-radius: 50%;"/>
                    </div>
                </div>

                <div class="d-print-none col-md-6">
                    <div class="print-edit highlight" style="text-align: center">

                        {{-- <button  id="btnid" class="text-center printbtn"> <i class="fa fa-print"></i> Print </button> --}}

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

            <br/>

            <div class="">
                <h4> Registration Details, <span class="pull-right">Status :
                        @if($userDetails->status==0)
                            <span class="btn btn-warning"> Pending <i class="fa fa-clock-o"></i></span>
                        @elseif($userDetails->status==1)
                            <span class="btn btn-info"> Partial Approve </span>
                        @elseif($userDetails->status==2)
                            <span class="btn btn-success"> Full Approve <i class="fa fa-check"></i></span>
                        @elseif($userDetails->status==3)
                            <span class="btn btn-danger"> Rejected <i class="fa fa-times"></i></span>
                        @endif</span>

                </h4>
                <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                    <tr>
                        <th>Name</th>
                        <td>{{$userData->name}}</td>
                    </tr>
                    <tr>
                        <th>Father's Name</th>
                        <td>{{$userDetails->father_name}}</td>
                    </tr>
                    <tr>
                        <th>Mobile</th>
                        <td>{{$userData->mobile_no}}</td>
                    </tr>
                    <tr>
                        <th>Batch</th>
                        <td>{{$userDetails->userInfoBatch->batch_name}}</td>
                    </tr>
                    <tr>
                        <th>Village</th>
                        <td>{{$userDetails->userInfoVillage->village}}</td>
                    </tr>
                    <tr>
                        <th>Union</th>
                        <td>{{$userDetails->userInfoUnion->union}}</td>
                    </tr>
                    <tr>
                        <th>Thanaa/Upazila</th>
                        <td>{{$userDetails->userInfoThana->thana_upazila}}</td>
                    </tr>
                    <tr>
                        <th>District</th>
                        <td>{{$userDetails->userInfoDist->district}}</td>
                    </tr>

                    <hr>
                    <tr>
                        <th colspan="2" class="text-center text-danger">Ticket & Fee info</th>
                    </tr>

                    <tr>
                        <th>Registration Fee</th>

                        <td>
                            @if($userDetails->student_category==1)
                                <span>1 x 800 = 800</span>

                            @elseif($userDetails->student_category==2)
                                @if($userDetails->class_name=='Honours' || $userDetails->class_name=='Masters' || $userDetails->class_name=='Eleven' || $userDetails->class_name=='Twelve')
                                    <span>1 x 400 = 400 </span>
                                @else
                                    <span>1 x 200 =200 </span>
                                @endif
                            @elseif($userDetails->student_category==3)
                                <span>1 x 800 = 800</span>

                            @endif



                        </td>
                    </tr>

                    @if($userDetails->spouse!=0)
                        <tr>
                            <th>Spouse</th>
                            <td>  &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;500</td>
                        </tr>
                    @endif


                    @if($userDetails->guest_no!='')
                        <tr>
                            <th>Number of Guest</th>
                            <td> {{$userDetails->guest_no}} x 400 = {{$userDetails->guest_no*400}}</td>
                        </tr>
                    @endif

                    @if($userDetails->children!='')
                        <tr>
                            <th>Number Children</th>
                            <td> {{$userDetails->children}} x 200 = {{$userDetails->children*200}}</td>
                        </tr>
                    @endif


                    <tr>
                        <th>Total Ticket </th>
                        <td>{{$userDetails->ticket_no}}</td>
                    </tr>
                    <tr style="color: #9C27B0">
                        <th>Total Receivable </th>
                        <td>{{$userDetails->payable}}.Tk</td>
                    </tr>

                    <tr style="color: #9C27B0">
                        <th>Payment Method</th>
                        <td>{{$userDetails->payment_method}}

                            @if($userDetails->payment_method=='bKash')
                               ( bKash Charge: {{($userDetails->payable*19)/1000}}.Tk)
                                @endif

                        </td>
                    </tr>


                    @if($userDetails->paid!=0)
                    <tr>
                        <th>Received Amount</th>
                        <td>{{$userDetails->paid}}.Tk</td>
                    </tr>

                    @if(!empty($userDetails->receivedBy))

                    <tr>
                        <th>Received By</th>
                        <td>{{$userDetails->receivedBy->name.', Mobile:'.$userDetails->receivedBy->mobile_no}}</td>
                    </tr>
                    @endif
                        @endif

                </table>
            </div>


            @if($userDetails->status==2)
            <div class="well" style="background-color: #ff770280;">
                {!! Form::open(['url'=>'update-voucher-number','method'=>'POST','class'=>'registration-from']) !!}

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group" style="display: grid">


                            <label> @if(empty($userDetails->voucher_no)) Add Voucher Number @else Update Voucher Number @endif</label>

                            {{Form::text('voucher_no',$value=$userDetails->voucher_no,['class'=>'form-control pb_height-50 reverse','placeholder'=>'Enter voucher number','required'=>true])}}
                            @if ($errors->has('voucher_no'))
                                <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('voucher_no') }}</strong>
                    </span>
                            @endif
                        </div>

                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label> &nbsp; </label>
                            <input type="submit" value="submit" class="btn btn-primary " onclick="return confirm('Are you Sure Voucher number is Correct ?')">
                        </div>

                    </div>

                </div>

                <input type="hidden" name="user_id" value="{{$userData->id}}" />
                <hr>
                {!! Form::close() !!}
            </div>
            @endif


            <div class="table-responsive">
                <div class="note">
                    <p style="  padding-top: 15px;"><span>NB:</span>This is system Generated Document.</p>
                    <p>&#169; Sholla High School & College</p>
                </div>
            </div>

        </div>

    </div><!-- end modal content-->

</div>

    <script>

        $(function(){
            $('#printBtn').on('click', function() {

                //Print ele2 with default options
                $.print(".printForm");
            });
        });

    </script>
