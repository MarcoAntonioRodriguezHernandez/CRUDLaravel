<h1>{{$mode}} Autor</h1>
@if(count($errors)>0) <!--This if is used to show the alert of error if exist-->
<div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error )
                <li> {{$error}} </li>
            @endforeach
        </ul>
    </div>
@endif

<!--This is a form where I can get the data-->
<label for="name" style="width: 100%" class="form-label">Nombre
    <br><input class="form-control" type="text" name="name" id="name"
               value="{{ isset($authors->name)? $authors->name:old('name')}}" placeholder="Ej. Juan Alberto"> </label><br>
<label for="surname" style="width: 100%" class="form-label">Apellido
    <br>
    <input class="form-control" type="text" name="surname" id="surname"
           value="{{isset($authors->surname)? $authors->surname:old('surname')}}" placeholder="Ej. Pérez Solís"> </label><br>
<label for="gender" style="width: 100%" class="form-label">Género
    <br> <input class="form-control" type="text" name="gender" id="gender"
                value="{{isset($authors->gender)? $authors->gender:old('gender')}}" placeholder="Ej. Hombre/Mujer"></label><br>
<label for="age" style="width: 100%" class="form-label">Edad
    <br><input class="form-control" type="number" name="age" id="age" value="{{isset($authors->age)? $authors->age:old('age')}}"
               placeholder="Ej. 45"></label><br>

<br><input class="btn btn-success" type="submit" value="{{$mode}} Registro">
<a class="btn btn-primary" href="{{url('/authors/')}}">Regresar</a>
