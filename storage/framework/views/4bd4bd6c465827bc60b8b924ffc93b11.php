<?php $__env->startSection('content'); ?>
    <div class="container">

        <form action="<?php echo e(url('/loan/'.$loan->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('PATCH')); ?>


            <?php echo $__env->make('loan.form', ['mode'=>'Editar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marco\Development\ByteCoders\PHPStorm\library\resources\views/loan/edit.blade.php ENDPATH**/ ?>