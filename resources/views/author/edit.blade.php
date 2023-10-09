@extends('layouts.app')
@section('content')
    <div class="container">
        <!-- begin::Form -->
        <form action="{{url('/authors/'.$authors->id)}}" method="post">
            @csrf
            {{method_field('PATCH')}}
            @include ('author.form', ['mode'=>'Editar'])
        </form>
        <!-- end::Form -->
    </div>
@endsection
