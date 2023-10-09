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

<!--begin::All to get the name-->
<label for="name" style="width: 100%" class="form-label">Nombre
    <br><input class="form-control" type="text" name="name" id="name"
               value="{{ isset($authors->name)? $authors->name:old('name')}}" placeholder="Ej. Juan Alberto"> </label><br>
<!--end::All to get the name-->
<!--begin::All to get the surname-->
<label for="surname" style="width: 100%" class="form-label">Apellido
    <br>
    <input class="form-control" type="text" name="surname" id="surname"
           value="{{isset($authors->surname)? $authors->surname:old('surname')}}" placeholder="Ej. Pérez Solís"> </label><br>
<!--end::All to get the surname-->
<!--begin::All to get the gender-->
<label for="gender" style="width: 100%" class="form-label">Género
    <br> <input class="form-control" type="text" name="gender" id="gender"
                value="{{isset($authors->gender)? $authors->gender:old('gender')}}" placeholder="Ej. Hombre/Mujer"></label><br>
<!--end::All to get the gender-->
<!--begin::All to get the age-->
<label for="age" style="width: 100%" class="form-label">Edad
    <br><input class="form-control" type="number" name="age" id="age" value="{{isset($authors->age)? $authors->age:old('age')}}"
               placeholder="Ej. 45"></label><br>
<!--end::All to get the age-->
<br><input class="btn btn-success" type="submit" value="{{$mode}} Registro">
<a class="btn btn-primary" href="{{url('/authors/')}}">Regresar</a>
