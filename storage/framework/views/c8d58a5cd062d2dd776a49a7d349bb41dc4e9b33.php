<?php if(count($thanUpazilas)>0): ?>

    <?php echo e(Form::select('thana_upazila_id',$thanUpazilas,[],['id'=>'thanaUpazilaId','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select Thana/Upazila-','required'=>true])); ?>


    <?php if($errors->has('thana_upazila_id')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('thana_upazila_id')); ?></strong>
        </span>
    <?php endif; ?>
<?php else: ?>
    <?php echo e(Form::select('thana_upazila_id',[],[],['class'=>'form-control pb_height-50 reverse','placeholder'=>'No Thana/ Upazila','required'=>true])); ?>

<?php endif; ?>


<script>

    $('#thanaUpazilaId').on('change',function () {

        $('#villageId').val('')

        $('#villageId').css('display','none')

        var thanaUazilaId=$(this).val()

        $('#unionList').empty().load('<?php echo e(URL::to("/load-union")); ?>/'+$(this).val())
    })

</script><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/client/load-data/load-thana.blade.php ENDPATH**/ ?>