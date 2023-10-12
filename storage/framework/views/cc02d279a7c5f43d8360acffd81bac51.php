<h1><?php echo e($mode); ?> Prestamos</h1>

<?php if(count($errors)>0): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li> <?php echo e($error); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<!--begin::All to get the date_loan-->
<label for="date_loan" style="width: 100%" class="form-label">Fecha de prestamo
    <br><input class="form-control" type="date" name="date_loan" id="date_loan"
               value="<?php echo e(isset($loan->date_loan)? $loan->date_loan:old('date_loan')); ?>"> </label><br>
<!--end::All to get the date_loan-->
<!--begin::All to get the date_return-->
<label for="date_return" style="width: 100%" class="form-label">Fecha de devolucion
    <br><input class="form-control" type="date" name="date_return" id="date_return"
               value="<?php echo e(isset($loan->date_return)? $loan->date_return:old('date_return')); ?>"> </label><br>
<!--end::All to get the date_return-->
<!--begin::All to get the person_id-->
<label for="person_id" style="width: 100%" class="form-label">Nombre del prestatario
    <br><select class="form-control" name="person_id" id="person_id">
        <option value="">-- Seleccione un usuario --</option>
        <?php $__currentLoopData = $people; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option
                value="<?php echo e($person->id); ?>" <?php echo e(isset($loan) && $loan->person_id == $person->id ? 'selected' : ''); ?>>
                <?php echo e($person->name); ?> <?php echo e($person->surname); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select></label><br>
<!--end::All to get the person_id-->
<!--begin::All to get the book_id-->
<label for="book_id" style="width: 100%" class="form-label">Nombre del libro
    <br>
    <select class="form-control" name="book_id" id="book_id">
        <option value="">-- Seleccione un libro --</option>
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option
                value="<?php echo e($book->id); ?>" <?php echo e(isset($loan) && $loan->book_id == $book->id ? 'selected' : ''); ?>>
                <?php echo e($book->title); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</label><br>
<!--end::All to get the book_id-->
<br><input class="btn btn-success" type="submit" value="<?php echo e($mode); ?> Registro">
<a class="btn btn-primary" href="<?php echo e(route('loan.index')); ?>">Regresar</a>
<?php /**PATH C:\Users\marco\Development\Repositorios\CRUDLaravel\resources\views/loan/form.blade.php ENDPATH**/ ?>