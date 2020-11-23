

</div>

    </section>

<style>
    #copyright{
        background-color: #cacaca;
        color: #191717;
        text-align: center;
        font-size: 13px;
    }
    #copyright p{
        margin-bottom: 0px;
    }
</style>
<br>

<div id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p>All copyrights reserved © {{date('Y')}} -  <a rel="nofollow" href="http://hollaschoolcollege.edu.bd" target="_blank">SHOLLA HIGH SCHOOL & COLLEGE</a></p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="powered_text  flip">
                    <p>Powered By: <a href="http://hollaschoolcollege.edu.bd" target="_blank" title="SHOLLA HIGH SCHOOL & COLLEGE"> SHSC</a> |  <a href="{{URL::to('/user-login')}}"> Admin Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

    <div id="pb_loader" class="show fullscreen text-center">
        <img src="{{asset('images/img/logo_loader.png')}}" style="margin-top:180px;width:200px;">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff" />
        </svg>
    </div>

{{--<div class="company_info" xmlns="http://www.w3.org/1999/html">
    <p>
        <span>Managed by</span> <a href=""><img src="{{asset('images/img/Thrive-mini.png')}}" style="    padding-bottom: 10px;"/></a>
        <span>Powered by </span></span<a><img src="{{asset('images/img/Eduleam-mini.png')}}" style="height: 20px; padding-bottom: 7px;"></a>
    </p>
</div>--}}

<script src="{{asset('public/client/js/jquery.min.js')}}"></script>
<script src="{{asset('public/client/js/popper.min.js')}}"></script>
<script src="{{asset('public/client/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/client/js/slick.min.js')}}"></script>
<script src="{{asset('public/client/js/jquery.mb.YTPlayer.min.js')}}"></script>
<script src="{{asset('public/client/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('public/client/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('public/backend/assets/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('public/client/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/client/js/jQuery.print.js')}}"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{asset('public/client/js/main.js')}}"></script>

<script type="text/javascript">

//    $(':submit').click(function () {
//        if($('#file').val()=='')
//        {
//            $('#image-notifications').show();
//            return true;
//        }else{
//            $('#image-notifications').hide();
//        }
//
//    })



    function photoLoad(input,image_load) {
       // console.log((input.files[0].size/(1024*1024)).toFixed(2))

//        if(input.files[0].size>524288){
//            $('#nextbtn').attr('disabled',true)
//            $('#imageError').css('display','block')
//        }else {
//            $('#nextbtn').attr('disabled',false)
//            $('#imageError').css('display','none')
//        }

        var target_image='#'+$('#'+image_load).prev().children().attr('id');


        if (input.files && input.files[0]) {

            var dataURL=''
            var reader = new FileReader();

            reader.onload = function (e) {

               // $(target_image).attr('src', e.target.result);


                var tempImg = new Image();


                tempImg.onload = function() {

                    var MAX_WIDTH = 400;
                    var MAX_HEIGHT = 300;
                    var tempW = tempImg.width;
                    var tempH = tempImg.height;
                    if (tempW > tempH) {
                        if (tempW > MAX_WIDTH) {
                            tempH *= MAX_WIDTH / tempW;
                            tempW = MAX_WIDTH;
                        }
                    } else {
                        if (tempH > MAX_HEIGHT) {
                            tempW *= MAX_HEIGHT / tempH;
                            tempH = MAX_HEIGHT;
                        }
                    }

                    var canvas = document.createElement('canvas');
                    canvas.width = tempW;
                    canvas.height = tempH;
                    var ctx = canvas.getContext("2d");
                    ctx.drawImage(tempImg, 0, 0, tempW, tempH);
                    dataURL = canvas.toDataURL("image/jpeg");
                    $(target_image).empty().attr('src', dataURL)

                }
                tempImg.src = e.target.result;

//                var fd = new FormData();
//
//                var blobBin = atob(dataURL.split(',')[1]);
//                var array = [];
//                for(var i = 0; i < blobBin.length; i++) {
//                    array.push(blobBin.charCodeAt(i));
//                }
//                var file = new Blob([new Uint8Array(array)], {type: 'image/png', name: "avatar.png"});
//
//                fd.append("images", file);

                $('#images').val(fd)

            };



            reader.readAsDataURL(input.files[0]);
        }

    }






    $(document).ready(function(){
        console.log(window.location.hash);
        $('.owl-carousel').owlCarousel({
            center: true,
            loop:true,
            items:1,
            autoplay:true,
            dots: true,

        })
    });
    $(window).on('popstate', function(event) {
    alert("pop");
    });
    $(window).on('pushstate', function(event) {
        alert("push");
        });
    window.onhashchange = function () {
        return "Do you really want to close?";
    };
    window.addEventListener("unload", function (e) {
        console.log(window.location.hash);
        if(window.screenLeft >screen.width){
            $.ajax({
                type: "GET",
                url:  '/logout',
                async: false
            });
            alert("Window Closed");
        }
        else{
            alert("Window NOT closed");
        }

      return;
    });
    function logout(){
        $.ajax({
        type: 'GET', //THIS NEEDS TO BE GET
        url: '/logout',
        success: function (data) {
            console.log(data);
        },error:function(){
             console.log(data);
        }
    });
    }
</script>



@if(Session::has('success'))
    <script type="text/javascript">
        swal({
            type: 'success',
            title: '{{Session::get("success")}}',
            showConfirmButton: true,
            //timer: 1500
        })
    </script>
@endif
@if(Session::has('confirm-success'))
    <script type="text/javascript">
        swal({
            type: 'success',
            title: '{{Session::get("success")}}',
            showConfirmButton: true,
        })
    </script>
@endif
@if(Session::has('error'))
    <script type="text/javascript">
        swal({
            type: 'error',
            title: '{{Session::get("error")}}',
            showConfirmButton: true
        })
    </script>
@endif
