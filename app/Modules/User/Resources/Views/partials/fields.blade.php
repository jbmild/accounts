<div class="form-group">
    {!! Form::label('name', 'Nombre', ['for' => 'name'] ) !!}
    {!! Form::text('name', null , ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Escribe el nombre del usuario...' ]  ) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email', ['for' => 'email'] ) !!}
    {!! Form::text('email', null , ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Escribe el email del usuario...' ]  ) !!}
</div>