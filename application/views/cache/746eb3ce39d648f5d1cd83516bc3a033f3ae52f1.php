<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-6">
        <div class="card" style="margin-bottom:100px;">

            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Update User</strong>
            </h5>
            <div class="card-body px-lg-5 pt-0">

                <?php echo form_open_multipart(base_url('dashboard/setting'),['class' => 'p-5']); ?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" id="username" class="form-control" name="username" value="<?php echo e(set_new_value('username',$users['username'])); ?>" placeholder="Username">
                            <small class="text-danger"><?php echo e(form_error('username')); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" class="form-control" name="email" value="<?php echo e(set_new_value('email',$users['email'])); ?>" placeholder="jhon@mail.com">
                            <small class="text-danger"><?php echo e(form_error('email')); ?></small>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="old_password">Old Password</label>
                            <input type="text" id="old_password" class="form-control" name="old_password" placeholder="Old Password">
                            <small class="text-danger"><?php echo e(form_error('old_password')); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="text" id="password" class="form-control" name="new_password" placeholder="New Password">
                            <small class="text-danger"><?php echo e(form_error('new_password')); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password_confirm">Confirm New Password</label>
                            <input type="text" id="password_confirm" class="form-control" name="confirm_password" placeholder="confirm new password">
                            <small class="text-danger"><?php echo e(form_error('confirm_password')); ?></small>
                        </div>
                        <button class="btn btn-info my-4" type="submit">Save</button>
                        <a href="<?php echo e(base_url('dashboard/listing/')); ?>" class="btn btn-primary my-4">Back</a>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card" style="margin-bottom:100px;">

            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Update Sosmed</strong>
            </h5>
            <div class="card-body px-lg-5 pt-0">

                <?php echo form_open_multipart(base_url('dashboard/setting/sosmed'),['class' => 'p-5']); ?>
                        <div class="form-group">
                            <label for="facebook">facebook</label>
                            <input type="text" id="facebook" class="form-control" name="facebook" value="<?php echo e(set_new_value('facebook',$sosmed['facebook'])); ?>" placeholder="Facebook Link">
                        </div>
                        <div class="form-group">
                            <label for="youtube">youtube</label>
                            <input type="text" id="youtube" class="form-control" name="youtube" value="<?php echo e(set_new_value('youtube',$sosmed['youtube'])); ?>" placeholder="youtube Link">
                        </div>
                        <div class="form-group">
                            <label for="twitter">twitter</label>
                            <input type="text" id="twitter" class="form-control" name="twitter" value="<?php echo e(set_new_value('twitter',$sosmed['twitter'])); ?>" placeholder="Link twitter">
                        </div>
                        <button class="btn btn-info my-4" type="submit">Save</button>
                        <a href="<?php echo e(base_url('dashboard/listing/')); ?>" class="btn btn-primary my-4">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/forex-cloning/application/views/dashboard/seting.blade.php ENDPATH**/ ?>