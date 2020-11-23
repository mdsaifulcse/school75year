<?php if(count($villages)>0): ?>

    <?php echo e(Form::select('village_id',$villages,[],['id'=>'villageId','class'=>'form-control pb_height-50 reverse','placeholder'=>'-Select Village-','required'=>true])); ?>


    <?php if($errors->has('village_id')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('village_id')); ?></strong>
        </span>
    <?php endif; ?>
<?php else: ?>
    <?php echo e(Form::select('village_id',[],[],['class'=>'form-control pb_height-50 reverse','placeholder'=>'No Village','required'=>true])); ?>

<?php endif; ?>
<?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/client/load-data/load-village.blade.php ENDPATH**/ ?>