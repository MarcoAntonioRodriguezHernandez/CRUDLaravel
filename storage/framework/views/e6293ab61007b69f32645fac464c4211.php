<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Ver más de <?php echo e($data->name); ?> <?php echo e($data->surname); ?></h1>
        <a href="<?php echo e(route('people.index')); ?>" class="btn btn-primary">Regresar</a><br><br>
        <div>
            <p style="font-size: 20px">
                <b>ID:</b> <?php echo e($data->id); ?> <br>
                <b>Nombre:</b> <?php echo e($data->name); ?><br>
                <b>Apellido:</b> <?php echo e($data->surname); ?><br>
                <b>Dirección:</b> <?php echo e($data->address); ?><br>
                <b>Teléfono:</b> <?php echo e($data->phone); ?><br>

            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marco\Development\Repositorios\CRUDLaravel\resources\views/people/show.blade.php ENDPATH**/ ?>