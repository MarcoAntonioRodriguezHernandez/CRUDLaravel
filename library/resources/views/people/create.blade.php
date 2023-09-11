@extends('layouts.app')
@section('content')
    <div class="container">

        <form action="{{url('/people/')}}" method="post">
            @csrf
            @include ('people.form', ['mode'=>'Crear'])

        </form>
    </div>
@endsection
