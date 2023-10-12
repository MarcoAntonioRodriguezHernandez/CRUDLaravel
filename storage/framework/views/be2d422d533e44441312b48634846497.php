<?php $__env->startSection('content'); ?>
    <div class="container">


        <?php if(Session::has('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(Session::get('message')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>


        <a href="<?php echo e(url('/loan/create')); ?>" class="btn btn-success">Agregar nuevo prestamo</a>
        <table class="table table-light">
            <thead class="thead-light">
            <tr>
                <th>Id del prestamo</th>
                <th>Fecha del prestamo</th>
                <th>Fecha de devolución</th>
                <th>Nombre del prestatario</th>
                <th>Nombre del Libro</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loan->id); ?></td>
                    <td><?php echo e($loan->date_loan); ?></td>
                    <td><?php echo e($loan->date_return); ?></td>
                    <td><?php echo e($loan->people->name); ?> <?php echo e($loan->people->surname); ?></td>
                    <td><?php echo e($loan->book->title); ?></td>
                    <td><a href="<?php echo e(url('/loan/'.$loan->id.'/edit')); ?>" class="btn btn-warning"> Editar </a> |

                        <form action="<?php echo e(url('/loan/'.$loan->id.$loan->people->id)); ?>" class="d-inline" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo e(method_field('DELETE')); ?>

                            <input class="btn btn-danger" type="submit"
                                   onclick="return confirm('¿Deseas borrar totalmente el registro?')"
                                   value="Eliminar">
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marco\Development\ByteCoders\PHPStorm\library\resources\views/loan/index.blade.php ENDPATH**/ ?>