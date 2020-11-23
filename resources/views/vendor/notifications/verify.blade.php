<!DOCTYPE html>
<html>
<head>
    <title>Activate your account</title>
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
        <h1 style="padding:0px;color: #000;font-size: 24px;margin: 0;float:right;line-height: 48px;">Activate your account</h1>
    </div>
    <div class="text-content" style="background: #c7c7c7;padding: 10px;">
        <div class="text-content-full" style="margin: 50px;margin-top: 0;">
            <p style="    margin-bottom: 20px;">Hi, <br>
                You’re almost done! Simply click below to activate your account.</p>
            <div class="reset-password" style="text-align: center;">
                <a href="{{$url??''}}">Activate account</a>
            </div>
            

            <p style="margin-top: -8px;margin-bottom: -11px;padding-bottom: 7px;">The secured use of this system application is allowed. Achievement Career Care welcome & glad to incorporate you with it's family. Thank you so much for becoming a smart digital partner of Achievement Career Care Management System. Please remember your this Email ID & it's credentials because lot of information will be feeded via this email.</p>
            <p style="font-size:10px;">
                If you’re having trouble clicking the "Verify Email Address" button, click/copy the below link & paste in to any browser: <a href="{{$url??''}}">{{$url??'Link here'}}</a></p>
            <p>Best regards,<br>Support Team<br><b style="color:#000">Achievement Career Care</b></p>
        </div>
    </div>

</div>
</body>
</html>