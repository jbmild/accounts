<h1 class="text-primary">Control de Usuarios</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Nombre</th>
        <th class="text-center">Email</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
        <tr>
            <td class="text-center">{{ $user->name }}</td>
            <td class="text-center">{{ $user->email }}</td>

            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}

                <td class="text-center">
                    <button type="submit" class="btn btn-danger btn-xs">
                        Eliminar
                        <!--span class="glyphicon glyphicon-remove" aria-hidden="true"></span-->
                    </button>
                    <a href="{{ url('/users/'.$user->id.'/edit') }}" class="btn btn-info btn-xs">
                        Editar
                        <!--span class="glyphicon glyphicon-edit" aria-hidden="true"></span-->
                    </a>
                </td>

            {!! Form::close() !!}

        </tr>
    @endforeach
  </tbody>
</table>