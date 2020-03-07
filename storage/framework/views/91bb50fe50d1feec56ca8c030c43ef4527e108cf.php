<title>Log In</title>

<?php $__env->startSection('content'); ?>
        <form class="m-t" role="form" action="<?php echo e(url("/login/check")); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" required="" name="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="" name="password">
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            <a href="#"><small>Forgot password?</small></a>
            <p class="text-muted text-center"><small>Do not have an account?</small></p>
            <a class="btn btn-sm btn-white btn-block" href="#">Create an account</a>
        </form>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.defaultLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\project\laravel-login\resources\views/admin/login/index.blade.php ENDPATH**/ ?>