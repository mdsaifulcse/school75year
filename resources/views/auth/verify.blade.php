@extends('backend.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                    <!-- DIRECT CHAT PRIMARY -->
                    <div class="box box-danger box-solid">
                      <div class="box-header with-border">
                        <h3 class="box-title">Activate your account</h3>
          
                        <div class="box-tools pull-right">
                          
                        </div>
                      </div>
                      <!-- /.box-header -->
                      <div class="box-body">
                          <br>
                          <div class="col-md-1"></div>
                          <div class="col-md-10">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif
                              <h5>Enter your valid email: </h5>
                                
                                <div class="input-group">
                                    <input type="email" name="email" placeholder="Email here ..." class="form-control" required>
                                        <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary btn-flat">Send</button>
                                        </span>
                                </div>
                                <p id="error" class="text-danger"></p>
                                <br>
                                @if(Auth::user()->email!='')
                                <p class="text-center"> Note: If you do not find the account actvation email in your email account inbox then please check spam/junk. In case of undelivered email & found no where then click <a class="" href="{{ route('verification.resend') }}">RESEND</a> to get new email. </p>
                                @endif
                                <br>
                          </div>
                            
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                          <a class="btn btn-warning" href="{{ url('home') }}">Cancel</a>
                          @if(Auth::user()->email!='') <a class="btn btn-info  pull-right" id="resend" href="{{ route('verification.resend') }}">Resend</a>@endif
                      </div>
                      <!-- /.box-footer-->
                    </div>
                    <!--/.direct-chat -->
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
$('button').click(function(){
    var email = $('input[name=email]').val();
    // $.get("{{url('email-update-for-verify?email=')}}"+email,function(data,status){
    //     console.log(data)
    //     console.log(status)
    // })
    //$('#form-submit').submit();
    $.ajax({
        url: "{{url('email-update-for-verify?email=')}}"+email,
        type: 'GET',
        success: function(data){ 
            console.log(data)
          //$('#resend').click();
          window.location.href =  "{{url('email/resend')}}";
        },
        error: function(data) {
            var msg = 'Something error found!'
            if(data.status===409){
                msg = 'Duplicate email found!';
            }else if(data.status==403){
                msg = 'The email must be a valid.';
            }
            $('#error').html(msg)
        }
    });
})

</script>
@endsection
