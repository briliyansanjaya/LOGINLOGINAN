<?php $__env->startSection('container'); ?>
<div class="waw d-flex justify-content-center min-vh-100">
    <div class="container-fluid my-3">
        <div class="d-flex">
            <input type="text" class="form-control" placeholder="Search agents">
            <button class="btn btn-secondary" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <div class="row">
        <?php if($agents->isNotEmpty()): ?>
            <?php $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="container col-lg-3 my-3 ">
                    <div class="card" style="background-color: 7399BF">
                        <img src="<?php echo e($agent->agent_pict); ?>" class="card-img-top mt-3" style="float: center; height: 300px;object-fit: contain;" alt="<?php echo e($agent->agent_name); ?>">

                        <div class="card-body" style = "height: auto">
                            <h4 class="fw-normal text-center text-bold"><?php echo e($agent->agent_name); ?></h4>
                            <p class="card-text fw-bold mt-3" style = "margin-top: -5px;"><?php echo e(Str ::limit($agent->agent_desc, 180)); ?></p>
                        </div>
                        <?php if(auth()->guard()->check()): ?>
                            <a href="/edit/<?php echo e($agent->agent_id); ?>">
                                <div class="d-grid gap-2 col-6 mx-auto mb-2">
                                    <button class="btn btn-secondary" type="button">Edit</button>
                                </div>
                            </a>
                            <a href="/delete/<?php echo e($agent->agent_id); ?>">
                                <div class="d-grid gap-2 col-6 mx-auto mb-2">
                                    <button class="btn btn-danger   " type="button">Delete</button>
                                </div>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <table class="text-white text-center vh-100">
                <td class="align-middle"><h4>Tidak ada Agent!</h4></td>
            </table>
        <?php endif; ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<style>
    .waw{
        background-color: #0F141A;
    }
</style>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GSLC-ValorantAgents\resources\views/agent.blade.php ENDPATH**/ ?>