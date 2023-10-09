@extends('layouts.app')
@section('content')
    <div class="container">

        <form action="{{url('/books/'.$book->id)}}" method="post">
            @csrf
            {{method_field('PATCH')}}

            @include ('books.form', ['mode'=>'Editar'])
        </form>
    </div>
@endsection
