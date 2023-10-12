<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Ver más de <?php echo e($data->name); ?></h1>
        <a href="<?php echo e(route('authors.index')); ?>" class="btn btn-primary">Regresar</a><br><br>
        <div>
            <p style="font-size: 20px">
                <b>ID:</b> <?php echo e($data->id); ?> <br>
                <b>Nombre:</b> <?php echo e($data->name); ?><br>
                <b>Apellido:</b> <?php echo e($data->surname); ?><br>
                <b>Edad:</b> <?php echo e($data->age); ?><br>
                <b>Género:</b> <?php echo e($data->gender); ?><br>
            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marco\Development\Repositorios\CRUDLaravel\resources\views/author/show.blade.php ENDPATH**/ ?>