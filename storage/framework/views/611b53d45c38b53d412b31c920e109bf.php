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
<!--begin::All to get the name-->
<label for="name" style="width: 100%" class="form-label">Nombre
    <br><input class="form-control" type="text" name="name" id="name"
               value="<?php echo e(isset($people->name)? $people->name:old('name')); ?>" placeholder="Ej. Juan Alberto"> </label><br>
<!--end::All to get the name-->
<!--begin::All to get the surname-->
<label for="surname" style="width: 100%" class="form-label">Apellido
    <br><input class="form-control" type="text" name="surname" id="surname"
           value="<?php echo e(isset($people->surname)? $people->surname:old('surname')); ?>" placeholder="Ej. Pérez Solís"> </label><br>
<!--end::All to get the surname-->
<!--begin::All to get the address-->
<label for="gender" style="width: 100%" class="form-label">Dirección
    <br><input class="form-control" type="text" name="address" id="address"
                value="<?php echo e(isset($people->address)? $people->address:old('address')); ?>"
                placeholder="Ej. Fracc. Villa del Real Bastiones 41 Tecámac Edo. Mex."></label><br>
<!--end::All to get the address-->
<!--begin::All to get the phone-->
<label for="age" style="width: 100%" class="form-label">Telefono
    <br><input class="form-control" type="number" name="phone" id="phone"
               value="<?php echo e(isset($people->phone)? $people->phone:old('phone')); ?>" placeholder="Ej. 5561824688"></label><br>
<!--end::All to get the phone-->
<br><input class="btn btn-success" type="submit" value="<?php echo e($mode); ?> Registro">
<a class="btn btn-primary" href="<?php echo e(route('people.index')); ?>">Regresar</a>
<?php /**PATH C:\Users\marco\Development\Repositorios\CRUDLaravel\resources\views/people/form.blade.php ENDPATH**/ ?>