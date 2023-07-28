<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuário</title>
</head>
<body>
<form action="http://localhost:83/laravel-tips/ep01/public/usuarios/edit/{{$user->id}}" method="post">
    @csrf
    <label for="">Nome do usuário:</label>
    <input type="text" name="name" value="{{ $user->name }}">

    <label for="">E-mail do usuário:</label>
    <input type="email" name="email" value="{{ $user->email }}">

    <label for="">Senha do usuário:</label>
    <input type="text" name="password">

    <input type="submit" value="Editar usuário">
</form>
</body>
</html>
