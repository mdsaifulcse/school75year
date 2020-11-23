@extends('backend.app')
@section('breadcrumb')
    <ul class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{URL::to('/')}}">
                <i class="feather icon-home"></i>
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">
                Batches list
            </a>
        </li>
    </ul>
@endsection
@section('content')
    <!-- begin #content -->
    <div id="content" class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-info">
                        <div class="card-btn pull-right">
                            <a  href="#modal-dialog" class="btn btn-primary btn-sm" data-toggle="modal" title="Add New Batch " > <i class="fa fa-plus"></i> Add New</a>
                        </div>
                        <h4 class="card-title">All Batches List</h4>
                    </div>
                    <div class="card-body">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {!! Form::open(array('route' => 'batches.store','class'=>'form-horizontal','method'=>'POST')) !!}
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add new batch</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3">Name <sup class="text-danger">*</sup> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::text('batch_name',$value=old('batch_name'),['class'=>'form-control','placeholder'=>'batch name','required'=>true])}}
                                                <span class="text-danger">
                                                {{$errors->has('batch_name')?$errors->first('batch_name'):''}}
                                            </span>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3"> Serial <sup class="text-danger">*</sup> :</label>
                                            <div class="col-md-8 col-sm-8">
                                                {{Form::number('serial_num',$value=$max_serial+1,['class'=>'form-control','min'=>1,'max'=>$max_serial+1,'required'=>true])}}
                                                <span class="text-danger">
                                                {{$errors->has('serial_num')?$errors->first('serial_num'):''}}
                                            </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                                        <button type="submit" class="btn btn-sm btn-success">Confirm</button>
                                    </div>
                                    {!! Form::close(); !!}
                                </div>
                            </div>
                        </div> <!--  =================== End modal ===================  -->

                        <!--  -->
                        <div class="view_branch_set">

                        @if(count($batches)>0)
                            <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Batch Name</th>
                                    <th>Status</th>
                                    <th width="16%;">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>

                                @foreach($batches as $batch)
                                    <tr class="odd gradeX">
                                        <td>{{$batch->serial_num}}</td>
                                        <td>{{$batch->batch_name}}</td>
                                        <td class="text-dark">
                                            @if($batch->status==1)
                                                <a title="Active"><i class="fa fa-check-circle text-primary"></i></a>
                                            @else
                                                <a title="Inactive" ><i class="fa fa-times text-danger"></i></a>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- edit section -->
                                            <a href="#modal-dialog<?php echo $batch->id;?>" class="btn btn-xs btn-primary" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                            <!-- #modal-dialog -->

                                            <div class="modal fade" id="modal-dialog<?php echo $batch->id;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        {!! Form::open(array('route' => ['batches.update',$batch->id],'class'=>'form-horizontal','method'=>'PUT')) !!}
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit old Batch info</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3">Status :</label>
                                                                <div class="col-md-4 col-sm-4">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="status" value="1" id="radio-required" data-parsley-required="true" @if($batch->status=="1"){{"checked"}}@endif> Active
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-4">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="status" id="radio-required2" value="0" @if($batch->status=="0"){{"checked"}}@endif> Inactive
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3">Batch Name <sup class="text-danger">*</sup> :</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    {{Form::text('batch_name',$value=$batch->batch_name,['class'=>'form-control','placeholder'=>'Batch','required'=>true])}}
                                                                    <span class="text-danger">
                                                                        {{$errors->has('batch_name')?$errors->first('batch_name'):''}}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="control-label col-md-3 col-sm-3"> Serial <sup class="text-danger">*</sup> :</label>
                                                                <div class="col-md-8 col-sm-8">
                                                                    {{Form::number('serial_num',$value=$batch->serial_num,['class'=>'form-control','min'=>1,'required'=>true])}}
                                                                    <input type="hidden" name="id" value="{{$batch->id}}" />
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <a href="javascript:;" class="btn btn-sm btn-danger" data-dismiss="modal">Close</a>
                                                            <button type="submit" class="btn btn-sm btn-success">Update</button>
                                                        </div>
                                                        {!! Form::close(); !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end edit section -->

                                            <!-- delete section -->
                                            {{Form::open(array('route'=>['batches.destroy',$batch->id],'method'=>'DELETE','class'=>'deleteForm','id'=>"deleteForm$batch->id"))}}
                                            <button type="button" class="btn btn-danger btn-xs" onclick='return deleteConfirm("deleteForm{{$batch->id}}")'><i class="fa fa-trash"></i></button>
                                        {!! Form::close() !!}
                                        <!-- delete section end -->
                                        </td>
                                    </tr>
                                @endforeach
                                    @else
                                    <h2 class="text-danger text-center"> No data available here. </h2>
                                @endif
                                </tbody>
                            </table>
                            {{$batches->render()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end #content -->
@endsection
