@if(count($unions)>0)

    {{Form::select('union_id',$unions,[],['id'=>'unionId','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select Union-','required'=>true])}}

    @if ($errors->has('union_id'))
        <span class="help-block">
            <strong>{{ $errors->first('union_id') }}</strong>
        </span>
    @endif
@else
    {{Form::select('union_id',[],[],['class'=>'form-control pb_height-50 reverse','placeholder'=>'No Union','required'=>true])}}
@endif


<script>

    $('#unionId').on('change',function () {

        var thanaUazilaId=$(this).val()

        $('#villageList').empty().load('{{URL::to("/load-village")}}/'+$(this).val())
    })

</script>