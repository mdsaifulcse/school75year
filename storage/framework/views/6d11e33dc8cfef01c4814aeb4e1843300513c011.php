<?php if(count($unions)>0): ?>

    <?php echo e(Form::select('union_id',$unions,[],['id'=>'unionId','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select Union-','required'=>true])); ?>


    <?php if($errors->has('union_id')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('union_id')); ?></strong>
        </span>
    <?php endif; ?>
<?php else: ?>
    <?php echo e(Form::select('union_id',[],[],['class'=>'form-control pb_height-50 reverse','placeholder'=>'No Union','required'=>true])); ?>

<?php endif; ?>


<script>

    $('#unionId').on('change',function () {

        var thanaUazilaId=$(this).val()

        $('#villageList').empty().load('<?php echo e(URL::to("/load-village")); ?>/'+$(this).val())
    })

</script><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/client/load-data/load-union.blade.php ENDPATH**/ ?>