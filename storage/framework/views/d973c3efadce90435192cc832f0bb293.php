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

<label for="name" style="width: 100%" class="form-label">Nombre
    <br><input class="form-control" type="text" name="name" id="name"
               value="<?php echo e(isset($people->name)? $people->name:old('name')); ?>" placeholder="Ej. Juan Alberto"> </label><br>
<label for="surname" style="width: 100%" class="form-label">Apellido
    <br><input class="form-control" type="text" name="surname" id="surname"
           value="<?php echo e(isset($people->surname)? $people->surname:old('surname')); ?>" placeholder="Ej. Pérez Solís"> </label>
<br>
<label for="gender" style="width: 100%" class="form-label">Dirección
    <br><input class="form-control" type="text" name="address" id="address"
                value="<?php echo e(isset($people->address)? $people->address:old('address')); ?>"
                placeholder="Ej. Fracc. Villa del Real Bastiones 41 Tecámac Edo. Mex."></label><br>
<label for="age" style="width: 100%" class="form-label">Telefono
    <br><input class="form-control" type="number" name="phone" id="phone"
               value="<?php echo e(isset($people->phone)? $people->phone:old('phone')); ?>" placeholder="Ej. 5561824688"></label><br>

<br><input class="btn btn-success" type="submit" value="<?php echo e($mode); ?> Registro">
<a class="btn btn-primary" href="<?php echo e(url('/people/')); ?>">Regresar</a>
<?php /**PATH C:\Users\marco\Development\ByteCoders\PHPStorm\library\resources\views/people/form.blade.php ENDPATH**/ ?>