@extends('backend.app')

@section('breadcrumb')

  
        <h1>
            <a href="{{url('dashboard')}}">
                Dashboard
            </a>

        </h1>
        <ol class="breadcrumb">
            <li><a href="{{URL::to('home')}}"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Slider Update</a></li>

        </ol>
  
  @endsection
@section('content')

    <div class="content">
        <div class="col-md-12">
            <div class="row">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Slider Add</h3>

                <h3 class="pull-right box-title"><a href="{{URL::to('slider-admin')}}"><button type="button" class="btn btn-block btn-success btn-sm">All Slider</button></a></h3>
            </div>


            <div class="col-md-8 col-md-offset-2" style="margin-top: 20px;">
                <div class="row">


                    {!! Form::open(array('route' =>['slider-admin.update',$data->id],'method'=>'PUT','class'=>'form-horizontals','files'=>true)) !!}



                    <div class="form-group row">
                        <label for="text" class="col-md-2 control-label">{{ __('Slider Caption') }}</label>

                        <div class="col-md-8">
                            <textarea id="text" type="text" class="form-control" name="caption" value="" required placeholder="Slider caption">{{$data->caption}}
                            </textarea>

                            @if ($errors->has('caption'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('caption') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="text" class="col-md-2 control-label">{{ __('Slider Caption Bangla') }}</label>

                        <div class="col-md-8">
                            <textarea id="text" type="text" class="form-control" name="caption_bn" value="" required placeholder="Slider caption bn">{{$data->caption_bn}}
                            </textarea>

                            @if ($errors->has('caption_bn'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('caption_bn') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>






                    <div class="form-group ">
                        <label for="slide_photo" class="col-md-2 control-label">Slider</label>
                        <div class="col-md-4">
                            <label class="slide_upload" for="file">
                                <!--  -->

                                @if($data->image!=null)
                                    <img id="image_load" src='{{asset("$data->image")}}' class="img-responsive" style="    width: 200px;height: 150px;">
                                @else
                                    <img id="image_load" src="{{asset('images/default/photo.png')}}" style="    width: 200px;height: 150px;">
                                @endif


                            </label>


                            <input id="file" style="display:none"  name="image" type="file" onchange="photoLoad(this,this.id)">

                        </div>

                        {{Form::label('serial', 'Serial', array('class' => 'col-md-2 control-label'))}}
                        <div class="col-md-2">
                            <? $max_ser=$max+1; ?>
                            {{Form::number('serial',$data->serial,array('class'=>'form-control','placeholder'=>'Serial Number','max'=>"$max_ser",'min'=>'0'))}}
                        </div>


                    </div>

                    <div class="form-group" style="">
                        <div class="col-md-8 offset-md-1">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>
                    {{Form::close()}}

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


@endsection

@section('script')

    <script type="text/javascript">


        function photoLoad(input,image_load) {
            var target_image='#'+$('#'+image_load).prev().children().attr('id');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(target_image).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }


    </script>

@endsection