@extends('layouts.app')
@section('content')
    <div class="container">

        <form action="{{url('/authors/')}}" method="post">
            @csrf
            @include ('author.form', ['mode'=>'Crear'])

        </form>
    </div>
@endsection
