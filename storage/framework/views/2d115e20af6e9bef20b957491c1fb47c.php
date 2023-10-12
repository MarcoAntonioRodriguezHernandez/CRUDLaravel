<?php $__env->startSection('content'); ?>
    <div class="container">
        <!--begin::Form-->
        <form action="<?php echo e(route('loan.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('loan.form', ['mode'=>'Crear'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
        <!--end::Form-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marco\Development\Repositorios\CRUDLaravel\resources\views/loan/create.blade.php ENDPATH**/ ?>