<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de usuários</title>
</head>
 <body>
    
 <a href="{{ route('users.index') }}"  >Voltar à página inicial</a><br>

 <h1>Cadastrar usuários</h1>
  @if($errors->any())
        @foreach ($errors->all() as $error)
        <p style="color: #F02;">
        {{ $error }}
        </p>
        @endforeach
  @endif
 

 <form action="{{ route('users.store') }}" method="POST">    
 @csrf
 @method ('POST')
 <label>Nome: </label>
 <input type="text" name="name" placeholder="Ex: Adão" value="{{ old('name') }}"><br><br>

 <label>Email: </label>
 <input type="text" name="email" placeholder="Ex: seu@email.com" value= "{{ old('email') }}"><br><br>

 <label>Senha: </label>
 <input type="text" name="password" placeholder="Ex:123456" value= "{{ old('password') }}"><br><br>

 <button type="submit">Cadastrar </button>

 </form>

 </body>
</html>