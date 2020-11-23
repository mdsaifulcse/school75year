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
        <img width="240px" src="{{asset('images/default/logo.png')}}" alt="Achievement Career Care">
        <h1 style="padding:0px;color: #000;font-size: 24px;margin: 0;float:right;line-height: 48px;">ADMISSION <?php echo date('Y')?></h1>
    </div>

    <div class="text-content" style="background: #c7c7c7;padding: 10px;">
        <div class="text-content-full" style="margin: 50px;margin-top: 0;">
            <p style="margin-bottom: 20px;"> Dear Applicant, <br>
                </p>
            <div class="reset-password" style="text-align: center;">

            </div>

            <h5 style="margin: 0 auto;text-align: left;margin-top: 10px;font-size: 14px;padding: 5px;font-weight: bold;font-style: italic;color:#000">
                <?php echo nl2br($mess)?>
            </h5>


            <p style="margin-top: -11px;font-weight: bold;">
                Thank you, <br/>
                Support Team <br/>
                Achievement Career Care
            </p>
        </div>
    </div>

</div>
</body>
</html>