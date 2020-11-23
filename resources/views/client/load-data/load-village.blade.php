@if(count($villages)>0)

    {{Form::select('village_id',$villages,[],['id'=>'villageId','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select Village-','required'=>true])}}

    @if ($errors->has('village_id'))
        <span class="help-block">
            <strong>{{ $errors->first('village_id') }}</strong>
        </span>
    @endif
@else
    {{Form::select('village_id',[],[],['class'=>'form-control pb_height-50 reverse','placeholder'=>'No Village','required'=>true])}}
@endif
