<?php

namespace Yanagi\Cms;

require '../vendor/autoload.php';

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === "POST") {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $user = new User();

  if ($user->login($username, $password)) {
    echo "logado";
  } else {
    echo "Usuário ou senha inválidos.";
  }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administrativo :: Ergo</title>
</head>
<body>
  <form action="index.php" method="post">
    <label for="username">Usuario</label>
    <input type="text" placeholder="admin" id="username" name="username">
    <label for="password">Senha</label>
    <input type="password" placeholder="********" name="password" id="password">
    <button type="submit">Entrar</button>
  </form>
</body>
</html>