<?php $__env->startSection('container'); ?>
    <div class="waw container-fluid d-flex justify-content-center p-5 vh-100">
        <div>
            <?php if(session()->has('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if(session()->has('loginError')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo e(session('loginError')); ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <div class="card" style = "width: 500px;">
                <div class="card-header text-center">
                    <h5 class="fw-bold fs-6">Login</h5>
                </div>
                <form class="container p-4" action="/login" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" placeholder="Enter Your Email" autofocus required value="<?php echo e(old('email')); ?>">
                    </div>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password2" placeholder="Enter Your Password" required>
                    </div>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Remember me
                        </label>
                    </div>
                    <div class="mb-3 d-grid gap-2 col-5 mx-auto">
                            <button type="submit" class="btn btn-outline-secondary">Login</button>
                    </div>
                    <div class="form-group">
                        <div class="mb-3 d-grid gap-2 col-5 mx-auto justify-content-center">
                            <a href="<?php echo e(route('google.login')); ?>" class="btn btn-outline-danger">
                                Google+
                            </a>
                        </div>
                    </div>

                    <div>
                        <a href="/forgot-password">Forgot Password?</a>
                    </div>
                    <div style = 'margin-bottom: -15px;'>
                        <label for="formGroupExampleInput2" class="form-label">Don't have an account?</label>
                        <span><a href="/register">Register Here</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<style>
    .waw{
        background-color: #0F141A;
    }
</style>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLC-ValorantAgents\resources\views/login.blade.php ENDPATH**/ ?>