
@extends('backend.app')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 pd-top-30 relative form-area">

            <form  method="post" class="pb_form_v3">
                {{ csrf_field() }}

                <div class="icon">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                </div>

                <div class="text">



                    <p>Oops! This section is only for enrolled
                        students. Enroll today to unlock all of our
                        exciting features!
                    </p>
                </div>





                <div class="form-group row">


                </div>
                <div class="sub-heading">
               
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection 