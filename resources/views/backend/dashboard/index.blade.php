@extends('backend.app')
@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="{{URL::to('home')}}"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('public/backend/assets/slick/slick-theme.css')}}"/>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

@endsection

@section('content')
    <section class="content">
        <style>
            .dashboard-card-box{width:20%;float:left;padding: 0 15px;}
            .small-box{border-radius: 5px;}
            .small-box p {text-align: left; font-size: 18px; font-weight: bold}

            .all-branch-list a.btn-default{background: #848484;color: #fff;}

            .box-header .box-title{font-size:15px;}
            svg text{
                font-size:12px!important;
                font-weight: 800 !important;
                transform: scale(1) !important;
            }
            .small-box>.small-box-footer{background: rgba(0, 0, 0, 0.32);border-radius: 0 0 5px 5px;}

            .first-chart{position:relative;}
            .chart-over h1 small{color:#000;}
            #start_date,#end_date{width:80px;}
            @media (max-width: 767px){
                .dashboard-card-box{width:100%;}
                .dashboard-card-box h2{font-size: 25px;}
            }


            .box{
                color: #ffffff;
            }

            .box-header{
                color: #fff;
                padding: 14px;
                border-bottom: 1px solid #ffffff47;
            }

            .box-body{
                padding: 14px;
            }

            .box-footer{
                border-top: 1px solid #f4f4f442;
                padding: 14px;
                background-color: #ffffff0d;
            }


        </style>
        <div class="container">
            <hr>

            <div class="row">
                <div class="col-md-4">
                </div>

                <div class="col-md-4">
                    <!-- BAR CHART -->
                    <div class="box box-success" style="color: #98019a">
                        <div class="box-header with-border">
                            <h3 class="box-title" style="color: red;">Collection Report</h3>
                        </div>
                        <br>
                        <form method="POST" action="" accept-charset="UTF-8" class=""><input name="_token" type="hidden" value="xp5Fk2tvavtDstnxMY2rGcKpAS8VKyhHn9zRxyY3">
                            <div class="row">
                                <label class="text-right col-md-3">Admin</label>
                                <div class="col-md-8">
                                    {{Form::select('admin_id', $admins,[],['id'=>'adminWisePayment','class'=>'form-control','placeholder'=>'-All Superadmin-'])}}
                                </div>
                            </div>
                        </form>


                        <div class="box-body chart-responsive" style="height: 265px">
                            <div class="progress-group">
                                <span class="progress-text">Amount Receivable</span>
                                <span class="progress-number">
                             <b> 100% </b>
                              Tk.<span id="AmountReceivable">{{$totalReceivedAble->totalReceivedAble}}</span>
                          </span>

                                <div class="progress md">
                                    <div class="progress-bar progress-bar-aqua" style="width: 100%"></div>
                                </div>
                            </div>

                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Amount Received</span>
                                <span class="progress-number">
                              <b id="receivedPercent">
                                  {{$totalReceivedPercent}}%
                              </b>
                              Tk.<span id="AmountReceived">{{$totalReceived->totalReceived}}</span>

                          </span>

                                <div class="progress md">
                                    <div id="receivedWidth" class="progress-bar progress-bar-green" style="width: {{$totalReceivedPercent}}%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                            <div class="progress-group">
                                <span class="progress-text">Amount Dues</span>
                                <span class="progress-number">
                              <b id="duesPercent">
                               {{$duesPercent}} %
                              </b>
                              Tk.<span id="totalDues">{{$dues}}</span>
                          </span>

                                <div class="progress md">
                                    <div id="deusWidth" class="progress-bar progress-bar-yellow" style="width: {{$duesPercent}}%"></div>
                                </div>
                            </div>
                            <!-- /.progress-group -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <div class="box" style="background-color: #9a007f">
                            <div class="box-header"><i class="fa fa-archive" aria-hidden="true"></i> Total Summary  </div>
                            <div class="box-body">

                                Members: {{$members}},
                                Guest: {{$totalMembers->totalGuest}}, <br> Spouse: {{$totalMembers->totalSpouse}}, Children: {{$totalMembers->totalChildren}} <br>
                                <strong>Total: {{$members+$totalMembers->totalGuest+$totalMembers->totalSpouse+$totalMembers->totalChildren}}</strong>

                            </div>
                            <div class="box-footer"> <a style="color: #f1f1f1">Diamond Jubilee-2020 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <div class="box" style="background-color: #d26902;">
                            <div class="box-header"><i class="fa fa-clock-o" aria-hidden="true"></i> Pending Summary  </div>
                            <div class="box-body">
                                Members: {{$pendingMembers}},
                                Guest: {{$pendingData->totalGuest}}, <br> Spouse: {{$pendingData->totalSpouse}}, Children: {{$pendingData->totalChildren}} <br>
                                <strong>Total: {{$pendingMembers+$pendingData->totalGuest+$pendingData->totalSpouse+$pendingData->totalChildren}}</strong>
                            </div>
                            <div class="box-footer"> <a  style="color: #f1f1f1">Diamond Jubilee-2020 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <div class="box" style="background-color: #01983a;">
                            <div class="box-header"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Confirmed Summary  </div>
                            <div class="box-body">

                                Members: {{$confirmedMembers}},
                                Guest: {{$confirmedData->totalGuest}}, <br> Spouse: {{$confirmedData->totalSpouse}}, Children: {{$confirmedData->totalChildren}} <br>
                                <strong>Total: {{$confirmedMembers+$confirmedData->totalGuest+$confirmedData->totalSpouse+$confirmedData->totalChildren}}</strong>

                            </div>
                            <div class="box-footer"> <a  style="color: #f1f1f1">Diamond Jubilee-2020 <i class="fa fa-angle-double-right" aria-hidden="true"></i></a> </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>






    </section>

@endsection

@section('script')
    <script>
        $('#adminWisePayment').on('change',function (e) {



            var adminId= $(this).val()

            if(adminId=='') {
                adminId=1
            }


                $.ajax({
                    url: '{{url("load-admin-wise-payment")}}' + '/' + adminId,
                    type: 'GET',
                    'dataType': 'json',
                    success: function (data) {

                        $('#AmountReceivable').empty().html(data.totalReceivedAble.totalReceivedAble)
                        $('#AmountReceived').empty().html(data.totalReceived.totalReceived)
                        $('#totalDues').empty().html(data.dues)

                        $('#receivedPercent').empty().html(data.totalReceivedPercent + '%')
                        $('#receivedWidth').css('width', data.totalReceivedPercent + '%')

                        $('#duesPercent').empty().html(data.duesPercent + '%')
                        $('#deusWidth').css('width', data.duesPercent + '%')
                    }
                })
        })

    </script>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
    <script type="text/javascript" src="{{asset('public/backend/assets/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/backend/assets/Chart.min.js')}}"></script>



    <script type="text/javascript">
        $(document).ready(function(){
            $('.slick-sliders').slick({
                dots: false,
                infinite: false,
                speed: 300,
            });
        });
    </script>
@endsection