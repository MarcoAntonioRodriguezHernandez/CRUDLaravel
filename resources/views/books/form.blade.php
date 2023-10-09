<h1>{{$mode}} Libros</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error )
                <li> {{$error}} </li>
            @endforeach
        </ul>
    </div>
@endif

<label for="title" style="width: 100%" class="form-label">Título
    <br><input class="form-control" type="text" name="title" id="title"
               value="{{ isset($book->title)? $book->title:old('title')}}" placeholder="Ej. Caperucita Roja"> </label>
<br>
<label for="editorial" style="width: 100%" class="form-label">Editorial
    <br><input class="form-control" type="text" name="editorial" id="editorial"
               value="{{isset($book->editorial)? $book->editorial:old('editorial')}}" placeholder="Ej. Panini"> </label>
<br>
<label for="year_edition" style="width: 100%" class="form-label">Año de edición
    <br> <input class="form-control" type="date" name="year_edition" id="year_edition"
                value="{{isset($book->year_edition)? $book->year_edition:old('year_edition')}}"></label><br>
<label for="isbn" style="width: 100%" class="form-label">ISBN
    <br><input class="form-control" type="number" name="isbn" id="isbn"
               value="{{isset($book->ISBN)? $book->ISBN:old('isbn')}}" placeholder="Ej. 4578529836"></label><br>
<label for="category_id" style="width: 100%" class="form-label">Nombre de la categoria
    <br><select class="form-control" name="category_id" id="category_id">
        <option value="">-- Seleccione una categoria --</option>
        @foreach($categories as $category)
            <option
                value="{{ $category->id }}" {{ isset($book) && $book->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select></label><br>
<label for="author_id" style="width: 100%" class="form-label">Id de autor
    <br><select class="form-control" name="author_id" id="author_id">
        <option value="">-- Seleccione un autor --</option>
        @foreach($authors as $author)
            <option
                value="{{ $author->id }}" {{ isset($book) && $book->author_id == $author->id ? 'selected' : '' }}>
                {{ $author->name }} {{ $author->surname }}
            </option>
        @endforeach
</label><br>
<br><input class="btn btn-success" type="submit" value="{{$mode}} Registro">
<a class="btn btn-primary" href="{{url('/authors/')}}">Regresar</a>
