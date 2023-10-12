<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Ver más de <?php echo e($data->title); ?></h1>
        <a href="<?php echo e(route('book.index')); ?>" class="btn btn-primary">Regresar</a><br><br>
        <div>
            <p style="font-size: 20px">
                <b>ID:</b> <?php echo e($data->id); ?> <br>
                <b>Nombre:</b> <?php echo e($data->title); ?><br>
                <b>Editorial:</b><?php echo e($data->editorial); ?><br>
                <b>ISBN:</b> <?php echo e($data->ISBN); ?><br>
                <b>Año de edicion:</b> <?php echo e($data->year_edition); ?><br>
                <b>Categoria:</b> <?php echo e($data->category->name); ?><br>
                <b>Autor:</b> <?php echo e($data->author->name); ?> <?php echo e($data->author->surname); ?>

            </p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marco\Development\Repositorios\CRUDLaravel\resources\views/books/show.blade.php ENDPATH**/ ?>