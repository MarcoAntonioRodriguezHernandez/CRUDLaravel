<h1><?php echo e($mode); ?> Autor</h1>

<?php if(count($errors)>0): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li> <?php echo e($error); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<label for="name" style="width: 100%" class="form-label">Nombre
    <br><input class="form-control" type="text" name="name" id="name"
               value="<?php echo e(isset($authors->name)? $authors->name:old('name')); ?>" placeholder="Ej. Juan Alberto"> </label><br>
<label for="surname" style="width: 100%" class="form-label">Apellido
    <br>
    <input class="form-control" type="text" name="surname" id="surname"
           value="<?php echo e(isset($authors->surname)? $authors->surname:old('surname')); ?>" placeholder="Ej. Pérez Solís"> </label><br>
<label for="gender" style="width: 100%" class="form-label">Género
    <br> <input class="form-control" type="text" name="gender" id="gender"
                value="<?php echo e(isset($authors->gender)? $authors->gender:old('gender')); ?>" placeholder="Ej. Hombre/Mujer"></label><br>
<label for="age" style="width: 100%" class="form-label">Edad
    <br><input class="form-control" type="number" name="age" id="age" value="<?php echo e(isset($authors->age)? $authors->age:old('age')); ?>"
               placeholder="Ej. 45"></label><br>

<br><input class="btn btn-success" type="submit" value="<?php echo e($mode); ?> Registro">
<a class="btn btn-primary" href="<?php echo e(url('/authors/')); ?>">Regresar</a>
<?php /**PATH C:\Users\marco\Development\ByteCoders\PHPStorm\library\resources\views/author/form.blade.php ENDPATH**/ ?>