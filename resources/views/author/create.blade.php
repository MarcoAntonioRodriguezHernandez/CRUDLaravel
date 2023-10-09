@extends('layouts.app')
@section('content')

    <div class="container">
        <!-- begin::Form -->
        <form action="{{url('/authors/')}}" method="post">
            @csrf
            @include ('author.form', ['mode'=>'Crear'])
        </form>
        <!-- end::Form -->
    </div>

@endsection
