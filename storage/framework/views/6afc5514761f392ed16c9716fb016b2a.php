<?php $__env->startSection('content'); ?>
    <div class="container">
        <!-- begin::Form -->
        <form action="<?php echo e(route('book.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo $__env->make('books.form', ['mode'=>'Crear'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
        <!-- end::Form -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marco\Development\Repositorios\CRUDLaravel\resources\views/books/create.blade.php ENDPATH**/ ?>