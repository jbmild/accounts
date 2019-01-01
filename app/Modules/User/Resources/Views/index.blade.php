@extends('layouts.app')

@section('content') 
    <a class="btn btn-success pull-right" href="{{ url('/users/create') }}" role="button">Nuevo usuario</a>
    @include('user::partials.table')
@endsection