<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página inicial</title>
</head>
<body>
    <h2>Olá!</h2>
    <a href="{{ route('users.create') }}"  ><h3>Clique aqui para cadastrar um usuário</h3></a><br>

    <h2>Listagem de usuários existentes<h2>

    @if(session('success'))
        <p style="color: #086;">
            {{ session('success') }}
        </p>
    @endif

    @forelse ($users as $user)
    <h3> ID: {{ $user->id }}<br>
        Nome: {{ $user->name }}<br>
        Email: {{ $user->email }}<br>
        {{-- <a href="{{ route('users.show', ['user' => $user->id]) }}">Mostrar um perfil de usuário</a><br> --}}
        <form method="GET" action="{{ route('users.show', ['user' => $user->id]) }}">
            @csrf
            @method('show')
            <button type="submit">Mostrar Perfil do Usuário </button>
            <br>
        </form>
        {{-- <a href="{{ route('users.edit', ['user' => $user->id]) }}">Editar o usuário</a><br> --}}
        <form method="GET" action="{{ route('users.edit', ['user' => $user->id]) }}">
            @csrf
            @method('update')
            <button type="submit">Editar o Usuário</button>
            <br>
        </form>
        {{-- <a href="{{ route('users.delete', ['user' => $user->id]) }}">Apagar o usuário</a><br> --}}
        <form method="POST" action="{{ route('users.delete', ['user' => $user->id]) }}">
            @csrf
            @method('delete')
            <button type="submit">Apagar o Usuário</button>
            <br><br>
        </form>

    </hr>
    </h3>
    @empty
        
    @endforelse

</body>
</html>