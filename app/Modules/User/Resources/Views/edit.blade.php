@extends('layouts.backend.main')

@section('content')
    <h4 class="text-center">Editar Usuario: {{ $user->name  }}</h4>
    {!! Form::model($user, [ 'route' => ['users.update', $user], 'method' => 'PUT']) !!}
        @include('user::partials.fields')
        <button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
    {!! Form::close() !!}
@endsection