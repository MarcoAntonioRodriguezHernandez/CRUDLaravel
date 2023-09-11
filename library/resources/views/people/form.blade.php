<h1>{{$mode}} Usuario</h1>

@if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error )
                <li> {{$error}} </li>
            @endforeach
        </ul>
    </div>
@endif

<label for="name" style="width: 100%" class="form-label">Nombre
    <br><input class="form-control" type="text" name="name" id="name"
               value="{{ isset($people->name)? $people->name:old('name')}}" placeholder="Ej. Juan Alberto"> </label><br>
<label for="surname" style="width: 100%" class="form-label">Apellido
    <br><input class="form-control" type="text" name="surname" id="surname"
           value="{{isset($people->surname)? $people->surname:old('surname')}}" placeholder="Ej. Pérez Solís"> </label>
<br>
<label for="gender" style="width: 100%" class="form-label">Dirección
    <br><input class="form-control" type="text" name="address" id="address"
                value="{{isset($people->address)? $people->address:old('address')}}"
                placeholder="Ej. Fracc. Villa del Real Bastiones 41 Tecámac Edo. Mex."></label><br>
<label for="age" style="width: 100%" class="form-label">Telefono
    <br><input class="form-control" type="number" name="phone" id="phone"
               value="{{isset($people->phone)? $people->phone:old('phone')}}" placeholder="Ej. 5561824688"></label><br>

<br><input class="btn btn-success" type="submit" value="{{$mode}} Registro">
<a class="btn btn-primary" href="{{url('/people/')}}">Regresar</a>
