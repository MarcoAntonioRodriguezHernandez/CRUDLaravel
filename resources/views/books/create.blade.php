@extends('layouts.app')
@section('content')
    <div class="container">

        <form action="{{url('/books/')}}" method="post">
            @csrf
            @include ('books.form', ['mode'=>'Crear'])

        </form>
    </div>
@endsection
