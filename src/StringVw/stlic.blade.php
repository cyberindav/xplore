<?php $__env->startSection('title', dbString('TGljZW5zZQ==')); ?>
<?php $__env->startSection(dbString('Y29udGVudA==')); ?>
     <div class="wizard-step-3 d-block">
    <form action="<?php echo e(route(dbString('aW5zdGFsbC5saWNlbnNlLnNldHVw'))); ?>" method=POST>
        <?php echo csrf_field(); ?>
        <?php echo method_field(dbString('UE9TVA==')); ?>
         <div class="row">
                <div class="database-field col-md-12">
                    <h6>Please enter Envato username and purchase code for verification</h6>
                    <div class="form-group form-row mb-3">
                        <label>Envato Username<span class="required-fill">*</span></label>
                        <div>
        <input type="text" name="envato_username" value="<?php echo e(old(dbString('ZW52YXRvX3VzZXJuYW1l'))); ?>"
        class="form-control" autocomplete="off">
        <?php if($errors->has(dbString('ZW52YXRvX3VzZXJuYW1l'))): ?>
            <span class="text-danger"> <?php echo e($errors->first(dbString('ZW52YXRvX3VzZXJuYW1l'))); ?></span>
        <?php endif; ?>
        </div>
                    </div>

                    <div class="form-group form-row mb-3">
                        <label class="col-lg-3">Envato Purchase Code<span
                                class="required-fill">*</span></label>
                        <div class="col-lg">
         <input type="text" name="license" value="<?php echo e(old(dbString('bGljZW5zZQ==')) ? old(dbString('bGljZW5zZQ==')) : ''); ?>"
        class="form-control" placeholder="" autocomplete="off">
        <?php if($errors->has(dbString('bGljZW5zZQ=='))): ?>
            <span class="text-danger"> <?php echo e($errors->first(dbString('bGljZW5zZQ=='))); ?></span>
        <?php endif; ?>
        </div>
                    </div>

                </div>
            </div>
<div class="mb-3">
If you don't know how to get purchase code, click here: <a href ="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code"> where is my purchase code </a>
</div>
        </form>
        <div class="next-btn d-flex">
        <a href="<?php echo e(route(dbString('aW5zdGFsbC5saWNlbnNl'))); ?>" class="btn btn-primary"><i class="far fa-hand-point-left me-2"></i>
                Previous</a>
            <a href="javascript:void(0)" class="btn btn-primary sumit-form">Next <i
                    class="far fa-hand-point-right ms-2"></i></a>
        </div>
    </div>
        <?php $__env->stopSection(); ?>
        <?php $__env->startSection(dbString('c2NyaXB0cw==')); ?>
            <script>
        $(".sumit-form").click(function() {
            $("form").submit();
        });
    </script>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make(dbString('c3R2OjpzdG1z'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH
