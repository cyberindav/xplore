<?php $__env->startSection('title', dbString('RGF0YWJhc2U=')); ?>
<?php $__env->startSection(dbString('Y29udGVudA==')); ?>
    <div class="wizard-step-3 d-block">
        <form action="<?php echo e(route(dbString('aW5zdGFsbC5kYXRhYmFzZS5jb25maWc='))); ?>" method=POST>
            <?php echo csrf_field(); ?>
            <?php echo method_field(dbString('UE9TVA==')); ?>
            <div class="row">
            <?php if(scDotPkS()): ?>
            <div class="database-field col-md">
            <h6>Please enter your database configuration details below.</h6>
                    <div class="form-group form-row">
                        <label>Host <span class="required-fill">*</span></label>
                        <div>
                            <input type="text" name="database[DB_HOST]"
                                value="<?php echo e(old(dbString('ZGF0YWJhc2UuREJfSE9TVA==')) ? old(dbString('ZGF0YWJhc2UuREJfSE9TVA==')) : '127.0.0.1'); ?>"
                                class="form-control" placeholder="127.0.0.1" autocomplete="off">
                            <?php if($errors->has(dbString('ZGF0YWJhc2UuREJfSE9TVA=='))): ?>
                                <span class="text-danger"><?php echo e($errors->first(dbString('ZGF0YWJhc2UuREJfSE9TVA=='))); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>Port<span class="required-fill">*</span></label>
                        <div>
                            <input type="number" name="database[DB_PORT]"
                                value="<?php echo e(old(dbString('ZGF0YWJhc2UuREJfUE9SVA==')) ? old(dbString('ZGF0YWJhc2UuREJfUE9SVA==')) : '3306'); ?>"
                                class="form-control" placeholder="3306" autocomplete="off">
                            <?php if($errors->has(dbString('ZGF0YWJhc2UuREJfUE9SVA=='))): ?>
                            <span class="text-danger"><?php echo e($errors->first(dbString('ZGF0YWJhc2UuREJfUE9SVA=='))); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>DB Username<span class="required-fill">*</span></label>
                        <div>
                            <input type="text" name="database[DB_USERNAME]"  value="<?php echo e(old(dbString('ZGF0YWJhc2UuREJfVVNFUk5BTUU='))); ?>"
                                class="form-control" autocomplete="off">
                            <?php if($errors->has(dbString('ZGF0YWJhc2UuREJfVVNFUk5BTUU='))): ?>
                               <span class="text-danger"><?php echo e($errors->first(dbString('ZGF0YWJhc2UuREJfVVNFUk5BTUU='))); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>DB Password</label>
                        <div>
                            <input type="password" name="database[DB_PASSWORD]" class="form-control" autocomplete="off">
                            <?php if($errors->has(dbString('ZGF0YWJhc2UuREJfUEFTU1dPUkQ='))): ?>
                               <span class="text-danger"><?php echo e($errors->first(dbString('ZGF0YWJhc2UuREJfUEFTU1dPUkQ='))); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>Database Name<span class="required-fill">*</span></label>
                        <div>
                                <input type="text" name="database[DB_DATABASE]" value="<?php echo e(old(dbString('ZGF0YWJhc2UuREJfREFUQUJBU0U='))); ?>"
                                class="form-control"  autocomplete="off">
                            <?php if($errors->has(dbString('ZGF0YWJhc2UuREJfREFUQUJBU0U='))): ?>
                               <span class="text-danger"><?php echo e($errors->first(dbString('ZGF0YWJhc2UuREJfREFUQUJBU0U='))); ?></span>
                            <?php endif; ?>

                        </div>
</div>
<div class="form-group form-row form-check">
  <input class="form-check-input" name="is_import_data" type="checkbox" value="" id="importDummyData">
  <label class="form-check-label" for="is_import_data">
    Import Dummy Data
  </label>
</div>
</div>
                <?php endif; ?>
                <?php if(scSpatPkS()): ?>
                <div class="database-field col-md" id="adminFormGroup">
                       <h6>Please enter your administration details below.</h6>
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
                            <input type="text" name="admin[last_name]" value="<?php echo e(old(dbString('YWRtaW4ubGFzdF9uYW1l'))); ?>"
                                class="form-control" autocomplete="off">
                            <?php if($errors->has(dbString('YWRtaW4ubGFzdF9uYW1l'))): ?>
                               <span class="text-danger"><?php echo e($errors->first(dbString('YWRtaW4ubGFzdF9uYW1l'))); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>Email<span class="required-fill">*</span></label>
                        <div>
                            <input type="email" name="admin[email]" value="<?php echo e(old(dbString('YWRtaW4uZW1haWw='))); ?>"  class="form-control" autocomplete="off">
                            <?php if($errors->has(dbString('YWRtaW4uZW1haWw='))): ?>
                               <span class="text-danger"><?php echo e($errors->first(dbString('YWRtaW4uZW1haWw='))); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group form-row">
                        <label>Password<span class="required-fill">*</span></label>
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
                            <input type="password" name="admin[password_confirmation]" class="form-control" autocomplete="off">
                            <?php if($errors->has(dbString('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u'))): ?>
                               <span class="text-danger"><?php echo e($errors->first(dbString('YWRtaW4ucGFzc3dvcmRfY29uZmlybWF0aW9u'))); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </form>
        <div class="next-btn d-flex">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="next-btn d-flex">

            <a href="<?php echo e(route(dbString('aW5zdGFsbC5saWNlbnNl'))); ?>" class="btn btn-primary" id="previousBtn"><i class="far fa-hand-point-left me-2"></i>
                Previous</a>
            <a href="javascript:void(0)"  id="submitBtn"  class="btn btn-primary submit-form">Next<i
                    class="far fa-hand-point-right ms-2"></i><span id="spinnerIcon" class="spinner-border spinner-border-sm ms-2 d-none"></span></a>
        </div>

        </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection(dbString('c2NyaXB0cw==')); ?>
   <script>
$(document).ready(function() {
'use strict';

$('#importDummyData').change(function() {
      if ($(this).is(':checked')) {
        $('#adminFormGroup').addClass('d-none');
      } else {
        $('#adminFormGroup').removeClass('d-none');
      }
    });
            $('.submit-form').on('click', function(event) {
                event.preventDefault();
                $(this).addClass('disabled');
                $(this).find('i').addClass('d-none');
                $('#previousBtn').addClass('disabled');
                $('#submitBtn').addClass('disabled');
                $('#spinnerIcon').removeClass('d-none');
                $("form").submit();
            });
        });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(dbString('c3R2OjpzdG1z'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
