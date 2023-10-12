<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Ver más del préstamo</h1>
        <a href="<?php echo e(route('loan.index')); ?>" class="btn btn-primary">Regresar</a><br><br>
        <div>
            <p style="font-size: 20px">
                <b>ID:</b> <?php echo e($data->id); ?> <br>
                <b>Fecha de pestamo:</b> <?php echo e($data->date_loan); ?><br>
                <b>Fecha de entrega:</b><?php echo e($data->date_return); ?><br>
                <b>Nombre del prestatario:</b> <?php echo e($data->people->name); ?> <?php echo e($data->people->surname); ?><br>
                <b>Nombre del libro:</b> <?php echo e($data->book->title); ?><br>

            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marco\Development\Repositorios\CRUDLaravel\resources\views/loan/show.blade.php ENDPATH**/ ?>