@extends('backend.app')

@section('breadcrumb')

    <ol class="breadcrumb">
        <li><a href="{{URL::to('home')}}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{url('all-users')}}">Admin</a></li>
        <li class="active">Create</li>
    </ol>

@endsection

@section('content')

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add New Admin</h3>

                        <div class="card-btn pull-right">
                            <a href="{{URL::to('all-users')}}"><button type="button" class="btn btn-success btn-xs">All Admin</button></a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-8 col-md-offset-2" style="margin-top: 20px;">
                            <div class="row">
                                {!! Form::open(['route'=>['all-users.update',$data->id],'method'=>'PUT','role'=>'form','data-toggle'=>'validator','class'=>'form-horizontal','files'=>'true'])  !!}

                                <div class="form-group row">
                                    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Full Name') }}</label>

                                    <div class="col-md-8">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $data->name }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="mobile_no" class="col-md-2 col-form-label text-md-right">{{ __('Mobile Number') }}</label>

                                    <div class="col-md-8">
                                        <input id="mobile_no" type="Number" class="form-control{{ $errors->has('mobile_no') ? ' is-invalid' : '' }}" name="mobile_no" min="0" value="{{ $data->mobile_no }}" readonly required>

                                        @if ($errors->has('mobile_no'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile_no') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Address') }}</label>

                                    <div class="col-md-8">
                                        <textarea name="address" class="form-control" rows="2" required><?php echo $data->address?></textarea>

                                        @if ($errors->has('address'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-3">
                                        <label class="control-label">Batch</label>
                                        {{Form::select('batch_id',$batches,isset($data->batch_id)?$data->batch_id:'',['class'=>'form-control select','required'=>true, 'placeholder'=>'-Select batch-'])}}
                                        @if ($errors->has('batch_id'))
                                            <span class="help-block">
                                    <small>{{ $errors->first('batch_id') }}</small>
                                </span>
                                        @endif
                                    </div>
                                    <div class="col-md-3">
                                        <label class="control-label">Village</label>
                                        {{Form::select('village_id',$village,isset($data->village_id)?$data->village_id:'',['class'=>'form-control select2','required'=>true,'placeholder'=>'-Search Village-'])}}
                                        @if ($errors->has('village_id'))
                                            <span class="help-block">
                                    <small>{{ $errors->first('village_id') }}</small>
                                </span>
                                        @endif
                                    </div>
                                    <div class="col-md-3 no-padding">
                                        <label class="control-label">Role</label>
                                        {{Form::select('role_id',$roles,$data->role_id,['class'=>'form-control select','required','placeholder'=>'-Select Role-'])}}
                                        @if ($errors->has('role_id'))
                                            <span class="help-block">
                                        <small>{{ $errors->first('role_id') }}</small>
                                    </span>
                                        @endif
                                    </div>

                                </div> <!--end row-->

                                <div class="form-group ">
                                    <label for="slide_photo" class="col-md-2 control-label"> Photo</label>
                                    <div class="col-md-8">
                                        <label class="slide_upload profile-image" for="file">
                                            @if($data->image!='')

                                            <img id="image_load" src="{{asset($data->image)}}">
                                                @else
                                                <img id="image_load" src="{{asset('images/default/photo.png')}}">
                                            @endif
                                        </label>

                                        <input id="file" style="display:none" name="image" type="file" onchange="photoLoad(this,this.id)" accept="image/*">

                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <input type="hidden" name="id" value="{{$data->id}}">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
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
