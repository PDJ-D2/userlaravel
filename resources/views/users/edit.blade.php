<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar usuário</title>
</head>
<body>
    <a href="{{ route('users.index') }}">Voltar a página inicial</a><br>
    <a href="{{ route('users.show', ['user' => $user->id]) }}">Mostrar usuário</a><br>

    <h1>Editar usuários</h1>
    @if($errors->any())
          @foreach ($errors->all() as $error)
          <p style="color: #F02;">
          {{ $error }}
          </p>
          @endforeach
    @endif
   
  
   <form action="{{ route('users.update', ['user' => $user->id]) }}" method='PUT'>    
   @csrf
   @method ('PUT')
   <label>Nome: </label>
   <input type="text" name="name" placeholder="Ex: Adão" value="{{ old('name', $user->name) }}"><br><br>
  
   <label>Email: </label>
   <input type="text" name="email" placeholder="Ex: seu@email.com" value= "{{ old('email', $user->email) }}"><br><br>
  
   <label>Senha: </label>
   <input type="text" name="password" placeholder="Ex:123456" value= "{{ old('password', $user->password) }}"><br><br>
  
   <button type="submit">Editar </button>
  
   </form>
  
</body>
</html>