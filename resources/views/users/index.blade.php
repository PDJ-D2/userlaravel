<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Olá</title>
</head>
<body>
    <h2>Bom dia</h2>
    <a href="{{ route('users.create') }}"  ><h3>Cadastrar usuários</h3></a><br>

    <h2>Listagem de usuários<h2>

    @if(session('success'))
        <p style="color: #086;">
            {{ session('success') }}
        </p>
    @endif

    @forelse ($users as $user)
    <h3> ID: {{ $user->id }}<br>
        Nome: {{ $user->name }}<br>
        Email: {{ $user->email }}<br>
        <a href="{{ route('users.show', ['user' => $user->id]) }}">visualizar</a><br>
    </hr>
    </h3>
    @empty
        
    @endforelse

</body>
</html>