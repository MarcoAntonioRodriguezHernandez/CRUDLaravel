@extends('layouts.app')
@section('content')
    <div class="container">
        <!-- begin::Form -->
        <form action="{{route('book.store')}}" method="post">
            @csrf
            @include ('books.form', ['mode'=>'Crear'])
        </form>
        <!-- end::Form -->
    </div>
@endsection
