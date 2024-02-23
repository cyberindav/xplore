<?php $__env->startSection('title', dbString('VmVyaWZ5')); ?>
<?php $__env->startSection(dbString('Y29udGVudA==')); ?>
    <div>
        <form action="<?php echo e(route(dbString('aW5zdGFsbC52ZXJpZnk='))); ?>" method=POST>
            <?php echo csrf_field(); ?>
            <?php echo method_field(dbString('UE9TVA==')); ?>
            <div class="row">
                <div class="database-field col-md-12">
                    <h6>Please verify license & enter your administration details below.</h6>

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
                        <div class="form-group form-row">
                        <label>Purchase Code<span class="required-fill">*</span></label>
                        <div>
                            <input type="text" name="license" value="<?php echo e(old(dbString('bGljZW5zZQ=='))); ?>" class="form-control" autocomplete="off">
                            <?php if($errors->has(dbString('bGljZW5zZQ=='))): ?>
                                <span class="text-danger"><?php echo e($errors->first(dbString('bGljZW5zZQ=='))); ?></span>
                            <?php endif; ?>

                        </div>
                    </div>
<div>
If you don't know how to get purchase code, click here: <a href ="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code"> where is my purchase code </a>
</div>
                        <?php if(scSpatPkS()): ?>
                        <div class="form-group form-row">
                        <div>
                            <div class="form-group form-row">
                                <label>First Name <span class="required-fill">*</span></label>
                                <div>
                                    <input type="text" name="admin[first_name]"  value="<?php echo e(old(dbString('YWRtaW4uZmlyc3RfbmFtZQ=='))); ?>"
                                        class="form-control" autocomplete="off">
                                    <?php if($errors->has(dbString('YWRtaW4uZmlyc3RfbmFtZQ=='))): ?>
                                        <span class="text-danger"><?php echo e($errors->first(dbString('YWRtaW4uZmlyc3RfbmFtZQ=='))); ?></span>
                                    <?php endif; ?>
                                 </div>
                            </div>
                            <div class="form-group form-row">
                                <label>Last Name<span class="required-fill">*</span></label>
                                <div>
                                    <input type="text" name="admin[last_name]"  value="<?php echo e(old(dbString('YWRtaW4ubGFzdF9uYW1l'))); ?>"
                                        class="form-control" autocomplete="off">
                                    <?php if($errors->has(dbString('YWRtaW4ubGFzdF9uYW1l'))): ?>
                                        <span class="text-danger"><?php echo e($errors->first(dbString('YWRtaW4ubGFzdF9uYW1l'))); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label>Email <span class="required-fill">*</span></label>
                                <div>
                                    <input type="email" name="admin[email]" value="<?php echo e(old(dbString('YWRtaW4uZW1haWw='))); ?>" class="form-control" autocomplete="off">
                                    <?php if($errors->has(dbString('YWRtaW4uZW1haWw='))): ?>
                                        <span class="text-danger"><?php echo e($errors->first(dbString('YWRtaW4uZW1haWw='))); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label>Password  <span class="required-fill">*</span></label>
                                <div>
                                    <input type="password" name="admin[password]" class="form-control" autocomplete="off">
                                    <?php if($errors->has(dbString('YWRtaW4ucGFzc3dvcmQ='))): ?>
                                        <span class="text-danger"><?php echo e($errors->first(dbString('YWRtaW4ucGFzc3dvcmQ='))); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group form-row">
                                <label>Confirm Password <span class="required-fill">*</span></label>
                                <div>
                                    <input type="password" name="admin[password_confirmation]" class="form-control"
                                        autocomplete="off">
                                    <?php if($errors->has(dbString('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u'))): ?>
                                        <span class="text-danger"><?php echo e($errors->first(dbString('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u'))); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                                <?php endif; ?>
                                </div>
                    </div>
                </form>
                <div class="next-btn d-flex">
                    <a href="javascript:void(0)" class="btn btn-primary sumit-form">Submit <i
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
