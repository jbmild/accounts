@extends('layouts.backend.main')

@section('content')
    {!! Form::open([ 'route' => 'users.store', 'method' => 'POST']) !!}
        @include('user::partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar</button>
    {!! Form::close() !!}
@endsection