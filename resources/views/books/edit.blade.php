@extends('layouts.app')
@section('content')
    <div class="container">
        <!-- begin::Form -->
        <form action="{{route('book.update',$book->id)}}" method="post">
            @csrf
            {{method_field('PUT')}}
            @include ('books.form', ['mode'=>'Editar'])
        </form>
        <!-- end::Form -->
    </div>
@endsection
