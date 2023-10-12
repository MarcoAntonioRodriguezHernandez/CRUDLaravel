<?php $__env->startSection('content'); ?>
    <div class="container">

        <form action="<?php echo e(route('people.update',$people->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo e(method_field('PUT')); ?>


            <?php echo $__env->make('people.form', ['mode'=>'Editar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marco\Development\Repositorios\CRUDLaravel\resources\views/people/edit.blade.php ENDPATH**/ ?>