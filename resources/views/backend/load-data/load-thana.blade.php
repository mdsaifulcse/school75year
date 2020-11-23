@if(count($thanUpazilas)>0)

    {{Form::select('thana_upazila_id',$thanUpazilas,[],['id'=>'thanaUpazilaId','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select Thana/Upazila-','required'=>true])}}

    @if ($errors->has('thana_upazila_id'))
        <span class="help-block">
            <strong>{{ $errors->first('thana_upazila_id') }}</strong>
        </span>
    @endif
@else
    {{Form::select('thana_upazila_id',[],[],['class'=>'form-control pb_height-50 reverse','placeholder'=>'No Thana/ Upazila','required'=>true])}}
@endif


<script>

    $('#thanaUpazilaId').on('change',function () {

        $('#villageId').val('')

        $('#villageId').css('display','none')

        var thanaUazilaId=$(this).val()

        $('#unionList').empty().load('{{URL::to("/load-union")}}/'+$(this).val())
    })

</script>