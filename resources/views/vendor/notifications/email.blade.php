<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <style type="text/css">

        .reset-password a{background: #202e56;padding: 10px;border-radius: 5px;
            text-align:center; text-decoration: none;color: #fff;font-size: 13px;font-weight: bold;
            padding-top: 7px;padding-bottom: 7px;}
        .reset-password a:hover{background-color: green;}
    </style>
</head>
<body>
<div class="pull-content" style="width: 100%;margin: 0 auto;font-family: sans-serif;">
    <div class="content" style="background: #e2e2e2;padding:10px 20px;height: 60px;">
        <img width="240px" src="{{asset('images/default/logo.png')}}" alt="AchievementCC">
        <h1 style="padding:0px;color: #000;font-size: 24px;margin: 0;float:right;line-height: 48px;">Reset Password</h1>
    </div>
    <div class="text-content" style="background: #c7c7c7;padding: 10px;">
        <div class="text-content-full" style="margin: 50px;margin-top: 0;">
            <p style="    margin-bottom: 20px;">Hello, <br>
                A request to reset your  password was received. Click the below button to reset your password. Remember this link is valid for 60 minutes only.</p>
            <div class="reset-password" style="text-align: center;">
                <a href="{{$actionUrl??''}}">RESET PASSWORD</a>
            </div>

            <h5 style="margin: 0 auto;text-align: center;margin-top: 10px;font-size: 14px;padding: 5px;font-weight: bold;font-style: italic;color:#000">Or click/copy the below link & paste in to any browser:</h5>
            <p style="text-align: center;display: block;color: #000;font-weight: bold;    margin-top: 8px;">Link: <a href="{{$actionUrl??''}}">{{$actionUrl??'Link here'}}</a></p>
            <p style="margin-top: 5px;">Also find an OTP code below & use it to reset your password throughOTP verification in login your account valid mobile no. </p>
            <p style="text-align: center;display: block;color: #000;font-weight: bold;    margin-top: -8px;padding: 6px;">OTP: {{Session::get('otp_code')['otp']}}</p>
            <p style="margin-top: -8px;margin-bottom: -11px;padding-bottom: 7px;font-weight: bold;font-style: italic;">Please choose a strong password & keep it always secret.</p>
            <p>You may safely disregard this email if you didn’t request of the password reset then your password will not be changed.</p>
            <p>Thank you,</p>
            <p style="margin-top: -11px;font-weight: bold;">AchievementACC Team</p>
        </div>
    </div>

</div>
</body>
</html>