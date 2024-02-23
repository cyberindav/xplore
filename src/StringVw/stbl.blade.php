<?php $__env->startSection('title', dbString('VmVyaWZ5')); ?>
<?php $__env->startSection(dbString('Y29udGVudA==')); ?>
    <div>
        <form action="<?php echo e(route(dbString('aW5zdGFsbC51bmJsb2Nr'))); ?>" method=POST>
            <?php echo csrf_field(); ?>
            <?php echo method_field(dbString('UE9TVA==')); ?>
            <div class="row">
                <div class="database-field col-md-12">
                    <h6>Your Current license is Blocked. Please enter new license details below for active license.</h6>

                    <div class="form-group form-row">
                        <label>Envato Username<span class="required-fill">*</span></label>
                        <div>
                            <input type="text" name="envato_username" value="<?php echo e(old(dbString('ZW52YXRvX3VzZXJuYW1l'))); ?>"
                                class="form-control" autocomplete="off">
                            <?php if($errors->has(dbString('ZW52YXRvX3VzZXJuYW1l'))): ?>
                                <span class="text-danger"><?php echo e($errors->first(dbString('ZW52YXRvX3VzZXJuYW1l'))); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="form-group form-row">
                        <label>License Code<span class="required-fill">*</span></label>
                        <div>
                            <input type="text" name="license"  value="<?php echo e(old(dbString('bGljZW5zZQ=='))); ?>"
                                class="form-control" autocomplete="off">
                            <?php if($errors->has(dbString('bGljZW5zZQ=='))): ?>
                                <span class="text-danger"><?php echo e($errors->first(dbString('bGljZW5zZQ=='))); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
<div>
If you don't know how to get purchase code, click here: <a href ="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code"> where is my purchase code </a>
</div>
                </div>
            </div>
        </form>
        <div class="next-btn d-flex">
            <a href="javascript:void(0)" class="btn btn-primary sumit-form">Active <i
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

<?php echo $__env->make(dbString('c3R2OjpzdG12'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
