

<?php $__env->startSection('content'); ?>
    <div>
        <?php if($errors->any()): ?>
            <div style="color: red;">
                <?php echo e($errors->first()); ?>

            </div>
        <?php else: ?>
            <div style="color: green;">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
    </div>
    <h1>Welcome to Home page</h1>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Semester 5\Framework Pemrograman Web\buku\resources\views/pages/home.blade.php ENDPATH**/ ?>