<?php $__env->startSection('content'); ?>
    <div class="container">


        <?php if(Session::has('message')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(Session::get('message')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>


        <a href="<?php echo e(url('/books/create')); ?>" class="btn btn-success">Agregar nuevo libro</a>
        <table class="table table-light">
            <thead class="thead-light">
            <tr>
                <th>Id Libro</th>
                <th>Titulo</th>
                <th>Editorial</th>
                <th>Año de edición</th>
                <th>ISBN</th>
                <th>Categoria</th>
                <th>Autor</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($book->id); ?></td>
                    <td><?php echo e($book->title); ?></td>
                    <td><?php echo e($book->editorial); ?></td>
                    <td><?php echo e($book->year_edition); ?></td>
                    <td><?php echo e($book->ISBN); ?></td>
                    <td><?php echo e($book->category->name); ?></td>
                    <td><?php echo e($book->author->name); ?>  <?php echo e($book->author->surname); ?></td>
                    <td><a href="<?php echo e(url('/books/'.$book->id.'/edit')); ?>" class="btn btn-warning"> Editar </a> |

                        <form action="<?php echo e(url('/books/'.$book->id)); ?>" class="d-inline" method="post">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marco\Development\ByteCoders\PHPStorm\library\resources\views/books/index.blade.php ENDPATH**/ ?>