@extends('layouts.app')
@section('content')

    <div class="container"> <!--This is a redirection to a form template-->
        <form action="{{url('/authors/')}}" method="post">
            @csrf
            @include ('author.form', ['mode'=>'Crear'])
        </form>
    </div>

@endsection
