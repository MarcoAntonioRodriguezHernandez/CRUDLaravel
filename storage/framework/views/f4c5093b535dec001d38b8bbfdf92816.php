<h1><?php echo e($mode); ?> Libros</h1>

<?php if(count($errors)>0): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li> <?php echo e($error); ?> </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<!--begin::All to get the title-->
<label for="title" style="width: 100%" class="form-label">Título
    <br><input class="form-control" type="text" name="title" id="title"
               value="<?php echo e(isset($book->title)? $book->title:old('title')); ?>" placeholder="Ej. Caperucita Roja"> </label>
<br>
<!--end::All to get the title-->
<!--begin::All to get the editorial-->
<label for="editorial" style="width: 100%" class="form-label">Editorial
    <br><input class="form-control" type="text" name="editorial" id="editorial"
               value="<?php echo e(isset($book->editorial)? $book->editorial:old('editorial')); ?>" placeholder="Ej. Panini"> </label>
<br>
<!--end::All to get the editorial-->
<!--begin::All to get the year_edition-->
<label for="year_edition" style="width: 100%" class="form-label">Año de edición
    <br> <input class="form-control" type="date" name="year_edition" id="year_edition"
                value="<?php echo e(isset($book->year_edition)? $book->year_edition:old('year_edition')); ?>"></label><br>
<!--end::All to get the year_edition-->
<!--begin::All to get the isbn-->
<label for="isbn" style="width: 100%" class="form-label">ISBN
    <br><input class="form-control" type="number" name="isbn" id="isbn"
               value="<?php echo e(isset($book->ISBN)? $book->ISBN:old('isbn')); ?>" placeholder="Ej. 4578529836"></label><br>
<!--end::All to get the isbn-->
<!--begin::All to get the cathegory-->
<label for="category_id" style="width: 100%" class="form-label">Categorias
    <br><select class="form-control select2" name="category_id[]" id="category_id" multiple required>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option
                value="<?php echo e($id); ?>">
                <?php echo e($category); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if($errors->has('category_id')): ?>
            <span class="text-bg-danger"><strong><?php echo e($errors->first('categories')); ?></strong></span>
        <?php endif; ?>
    </select></label><br>
<!--end::All to get the cathegory-->
<!--begin::All to get the author-->
<label for="author_id" style="width: 100%" class="form-label">Id de autor
    <br><select class="form-control" name="author_id" id="author_id">
        <option value="">-- Seleccione un autor --</option>
        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option
                value="<?php echo e($author->id); ?>" <?php echo e(isset($book) && $book->author_id == $author->id ? 'selected' : ''); ?>>
                <?php echo e($author->name); ?> <?php echo e($author->surname); ?>

            </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</label><br><br>
<!--end::All to get the author-->
<br><br><input class="btn btn-success" type="submit" value="<?php echo e($mode); ?> Registro">
<a class="btn btn-primary" href="<?php echo e(route('book.index')); ?>">Regresar</a>
<?php /**PATH C:\Users\marco\Development\Repositorios\CRUDLaravel\resources\views/books/form.blade.php ENDPATH**/ ?>