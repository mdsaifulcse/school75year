<?php $__env->startSection('breadcrumb'); ?>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(URL::to('home')); ?>"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Notifications</li>
      </ol>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<style>
    .list-group-item{padding:0 10px;}
    .notify-list{width:90%;display:inline-block;padding: 8px 0px;}
    small.pull-right{line-height: 30px}
    

</style>


<div class="content">
        <div class="row">
			    <div class="col-md-12">
                    <div class="card">
						<div class="card-header card-info">
                                Your Notifications
							<div class="card-btn pull-right">
							</div>

						</div>

        <div class="card-body">
                <ul class="list-group">
                    <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li id="no-<?php echo e($data->id); ?>" class="list-group-item <?php echo e(($data->read!=null)?'':'unread'); ?>">
                    <a class="notify-list" href="<?php echo e(url('notifications',$data->id)); ?>"><?php echo e($data->title); ?> | <small><?php echo e(date('jS F Y',strtotime($data->created_at))); ?></small> </a> 
                    <?php if($data->read==null): ?>
                    <small class="pull-right"> <button class="btn btn-xs btn-warning" onclick='markAsRead("<?php echo e($data->id); ?>")' id="mark-<?php echo e($data->id); ?>" title="Mark as read">  <i class="fa fa-comments-o" aria-hidden="true"></i> </button> </small>
                    <?php endif; ?>
                 </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                </ul>
        </div>
        <!-- /.box-body -->
        <div class="card-footer clearfix">
         <?php echo e($notifications->render()); ?>

        </div>
    </div>
</div>
    <!-- /.box -->
        </div>
</div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    function markAsRead(id){
        $.get('<?php echo e(url("notifications")); ?>/'+id+'/edit',function(data,status){
            $('#no-'+id).removeClass('unread');
            $('#mark-'+id).hide();
        })
        
    }
    
   
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shollaschoolcoll/public_html/75years/resources/views/backend/notifications/index.blade.php ENDPATH**/ ?>