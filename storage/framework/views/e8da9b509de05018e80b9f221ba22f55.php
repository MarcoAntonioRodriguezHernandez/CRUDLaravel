<h1><?php echo e($mode); ?> Usuario</h1>

<?php if(count($errors)>0): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li> <?php echo e($error); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<label for="name" style="width: 100%" class="form-label">Nombre de la categoría
    <br><input class="form-control" type="text" name="name" id="name"
               value="<?php echo e(isset($category->name)? $category->name:old('name')); ?>" placeholder="Ej. Terror"> </label><br>
<br><input class="btn btn-success" type="submit" value="<?php echo e($mode); ?> Registro">
<a class="btn btn-primary" href="<?php echo e(route('category.index')); ?>">Regresar</a>
<?php /**PATH C:\Users\marco\Development\Repositorios\CRUDLaravel\resources\views/categorie/form.blade.php ENDPATH**/ ?>