<?php $__env->startSection('title', dbString('RGlyZWN0b3JpZXM=')); ?>
<?php $__env->startSection(dbString('Y29udGVudA==')); ?>
    <div class="wizard-step-2 d-block">
        <h6>Please enter your administration details below.</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Please make sure the PHP extensions listed below are installed</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $directories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $directory => $isCheck): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($directory); ?></td>
                            <td class="icon-success">
                                <i class="fas fa-<?php echo e($isCheck ? 'check' : 'times'); ?>"></i>
                            </td>
                        <tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="next-btn d-flex">
            <a href="<?php echo e(route(dbString('aW5zdGFsbC5yZXF1aXJlbWVudHM='))); ?>" class="btn btn-primary prev1"><i class="far fa-hand-point-left me-2"></i> status</a>
            <?php if($configured): ?>
                <a href="<?php echo e(route(dbString('aW5zdGFsbC5saWNlbnNl'))); ?>" class="btn btn-primary prev1">Next <i class="far fa-hand-point-right ms-2"></i></a>
            <?php else: ?>
                <a href="javascript:void(0)" class="btn btn-primary disabled"><?php echo e(__('static.next')); ?><i class="far fa-hand-point-right ms-2"></i></a>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(dbString('c3R2OjpzdG1z'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
