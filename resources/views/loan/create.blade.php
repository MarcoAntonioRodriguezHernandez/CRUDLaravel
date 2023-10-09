@extends('layouts.app')
@section('content')
    <div class="container">
        <!--begin::Form-->
        <form action="{{route('loan.store')}}" method="post">
            @csrf
            @include ('loan.form', ['mode'=>'Crear'])
        </form>
        <!--end::Form-->
    </div>
@endsection
