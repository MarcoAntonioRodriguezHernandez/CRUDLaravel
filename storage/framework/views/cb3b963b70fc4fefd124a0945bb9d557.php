<?php $__env->startSection('content'); ?>
    <div class="container">

        <form action="<?php echo e(url('/people/')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('people.form', ['mode'=>'Crear'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marco\Development\ByteCoders\PHPStorm\library\resources\views/people/create.blade.php ENDPATH**/ ?>