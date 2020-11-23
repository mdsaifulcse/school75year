<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Registration Sheet </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <style>
        @page {
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

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        .dataTable tr {
        }
    </style>
</head>
<body>
{{--<div class="page-break"></div>--}}
<div class="header">
    <table align="" style="width: 100%" class=" ">
        <tr class="clearfix">
            <td style="width:5%;">
                <img src="{{asset('/images/default/logo.png')}}" style="width: 80px" alt="Company Logo" title="">
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


    @if(count($reportData)>0)

        {{--<table style="width: 100%" class="dataTable">--}}
            <?php
            $total=count($reportData);
            $chunk=round($total/2);
            $i=0;
            ?>

                <div style="width: 100%" class="clearfix">
                    @foreach($reportData->chunk($chunk) as $data1)

                        <table style="width: 48%;float: left" class="data-table clearfix">
                            <tr>
                                <?php $sl=0?>
                            @foreach($data1 as $data)
                                <?php $sl+=1;?>
                                    <td style="float:left;width: 60%">

                                        <div>
                                            <p>Name: <b> {{$data->name}}</b></p>
                                            <p>Batch: <b>  @if($data->class_name!='')
                                                        {{$data->class_name}}
                                                    @else
                                                        {{$data->batch_name}}
                                                    @endif
                                                </b>
                                            </p>

                                            <p>Mobile: <b> {{$data->mobile_no}}</b></p>
                                            <p>Village: <b> {{$data->village}}</b></p>
                                        </div>
                                    </td>

                                    <td style="float:left;width:30%">
                                        <div >
                                            @if($data->image!='')
                                                <img src="{{asset($data->image)}}" style="width: @if($report_type==1) 60px @else 60% @endif">
                                            @else
                                                <img src="{{asset('/images/default/logo.png')}}" style="width: @if($report_type==1) 60px @else 60px @endif">
                                            @endif
                                        </div>
                                    </td>
                                @endforeach
                            </tr>
                            <hr>

                        </table>
                    @endforeach
                </div>




            @else
                <h4 class="text-danger text-center">No Data Found</h4>
            @endif
        {{--</table>--}}

</div>
<br class="page-break">


<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>