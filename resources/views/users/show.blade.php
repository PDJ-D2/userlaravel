<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuário</title>
</head>
<body> 
    <a href="{{ route('users.index') }}"  >Voltar ao índice</a><br>
    <h3>Visualizar Usuário Nº: {{$user->id}}</h3>
    
    @if(session('success'))
        <p style="color: #086;">
            {{ session('success') }}
        </p>
    @endif

    ID: {{ $user->id }} <br>
    Nome: {{ $user->name }} <br>    
    E-mail: {{ $user->email }} <br>
    Cadastrado em: {{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }}<br><br>

    <a href="{{ route('users.create') }}"  >Cadastrar um novo usuário</a><br><br>
    <a href="{{ route('users.edit', ['user' => $user->id]) }}">Editar o usuário</a><br><br> 
    <a href="{{ route('users.delete', ['user' => $user->id]) }}">Deletar o usuário</a><br><br>

</body>
</html>