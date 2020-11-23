@extends('auth.master')

@section('content')
    <div class="container">
        <style>
            a.resend-email:hover{color:#068e11;}
            body{background:#000 !important;}
        </style>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header" style="background: red;color: #fff;font-weight: bold;text-align: center;"> {{ __('OTP validation to reset password') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ url('password-otp-validation') }}">
                            @csrf
                            <input type="hidden" value="{{$email}}" name="email">
                            <div class="form-group row">
                                <label for="otp" class="col-md-3 col-form-label text-md-right" style="color:red;font-weight: bold;">{{ __('OTP') }}</label>

                                <div class="col-md-6">
                                    <input id="otp" type="number" min="0" class="form-control"  name="otp_code" value="" required autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary" style="float:right;font-weight: bold">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <a href="#" data-toggle="modal" data-target="#myModal"  class="resend-email"><i>Click here if not received OTP.</i></a>
                                </div>
                            </div>
                        </form>
                            <!-- Modal -->
                            <div class="modal fade @error('email') show @enderror" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"  @error('email') style="display:block" @enderror>
                                <div class="modal-dialog" role="document" style="width:388px;margin-top:150px;">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background: #4682ff;font-weight: bold;">
                                            <h5 class="modal-title" id="myModalLabel" style="color:#fff;">Password Reset Action</h5>
                                            <button style="color:#fff" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form method="POST" action="{{ route('password.email') }}" id="forgot-form">
                                            @csrf
                                            <div class="modal-body">


                                                <div class="form-group row">
                                                    <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail Address') }}</label>

                                                    <div class="col-md-12">
                                                        <input id="email"  type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your valid email here" value="{{ $email }}" required autocomplete="email" autofocus>
                                                        <span class="text-danger custom-email-error"></span>
                                                        @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-12 text-right">
                                                        <button type="button" id="forgot-reset-button" class="btn btn-primary pull-right"><b>Reset</b></button>
                                                    </div>
                                                </div>


                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- Model End --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>

    $('#forgot-reset-button').click(function(){
        var email = $('#email').val();
        if(email.length==0){
            $('.custom-email-error').html('Email is empty!');
        }else{
            $('.custom-email-error').html('');
            $.ajax({
                url:"{{url('password-reset-otp?email=')}}"+email ,
                type: 'GET',
                'dataType' : 'json',
                success: function(data) {
                    $('#forgot-form').submit();
                },
                error: function(err){
                    $('.custom-email-error').html('Email Address not found!');
                }
            })
        }

    })


</script>
@endsection

