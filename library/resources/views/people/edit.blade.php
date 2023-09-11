@extends('layouts.app')
@section('content')
    <div class="container">

        <form action="{{url('/people/'.$people->id)}}" method="post">
            @csrf
            {{method_field('PATCH')}}

            @include ('people.form', ['mode'=>'Editar'])
        </form>
    </div>
@endsection
