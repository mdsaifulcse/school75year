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
    </style>
</head>
<body>
{{--<div class="page-break"></div>--}}
<div class="header">
    <table align="" style="width: 100%" class=" ">
        <tr>
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

        <div id="registrationData">

            <table align="center" class="table table-border table-striped" border="1" cellspacing="0">
                <thead>
                <tr class="bg-primary">
                    <th>Sl</th>
                    @if($report_type==1)
                        <th>Voucher</th>
                    @endif
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Batch/Class</th>
                    <th>Village</th>
                    @if($report_type==1)
                        <th>Total Ticket</th>
                    @endif
                    <th>Photo</th>
                    @if($report_type==1)
                        <th width="10%">Signature</th>
                    @endif

                </tr>
                </thead>

                <tbody>

                <?php $i=1;?>
                @foreach($reportData as $ky=>$data)

                    <tr>
                        <td>{{$i++}}</td>
                        @if($report_type==1)
                            <td>{{$data->voucher_no}}</td>
                        @endif
                        <td>{{$data->name}}</td>
                        <td>{{$data->mobile_no}}</td>
                        <td>
                            @if($data->class_name!='')
                                {{$data->class_name}}
                            @else
                                {{$data->batch_name}}
                            @endif
                        </td>
                        <td>{{$data->village}}</td>
                        @if($report_type==1)
                            <td style="text-align: center">{{$data->ticket_no}}</td>
                        @endif
                        <td style="min-height: 30px !important;">
                            <span>
                            @if($data->image!='')
                                <img src="{{asset($data->image)}}" style="width: @if($report_type==1) 20px@else 60px @endif">
                                    @else
                                        <img src="{{asset('/images/default/logo.png')}}" style="width: @if($report_type==1) 20px @else 20px @endif">
                                @endif
                        </span>

                        </td>
                        @if($report_type==1)
                            <td>  </td>
                        @endif

                    </tr>

                    {{--@if($i%15==0)--}}
                    {{--<div class="page-break"></div>--}}
                    {{--@endif--}}


                @endforeach

                </tbody>


            </table>

            @else
                <h4 class="text-danger text-center">No Data Found</h4>
            @endif

        </div>

</div>
<div>

</div>
<br class="page-break">


<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>