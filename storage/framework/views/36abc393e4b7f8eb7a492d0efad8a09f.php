<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Autores</h1>
        <?php if(Session::has('message')): ?>
            <!--This is a message that show if the action was successful-->
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(Session::get('message')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <a href="<?php echo e(route('authors.create')); ?>" class="btn btn-success">Agregar nuevo autor</a>
        <!--begin::Table-->
        <table class="table table-light">
            <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($author->name); ?></td>
                    <td><?php echo e($author->surname); ?></td>
                    <td><?php echo e($author->age); ?></td>
                    <td><a href="<?php echo e(route('authors.show',$author->id)); ?>" class="btn btn-primary">Ver más</a> |
                        <a href="<?php echo e(route('authors.edit',$author->id)); ?>" class="btn btn-warning"> Editar </a> |
                        <form action="<?php echo e(route('authors.destroy',$author->id)); ?>" class="d-inline" method="post">
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
        <?php echo e($authors->links()); ?>

        <!--end::Table-->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marco\Development\Repositorios\CRUDLaravel\resources\views/author/index.blade.php ENDPATH**/ ?>