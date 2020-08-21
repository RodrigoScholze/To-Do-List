<?php
    session_start();
    if(isset($_SESSION["Name"]))
    {
      header("Location: tasks.php");
      exit();
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="Style/style.css">
  <head>
    <meta charset="utf-8">
    <title>Login - To Do List</title>
  </head>
  <body>
    <h1 class="Title">Login - To Do List</h1>

    <form action="Controllers/user_authentication.php" method="post">
      <label class="TitleInput">Usuário:</label><br>
      <input class="Input" type="text" name="User" required><br>

      <label class="TitleInput">Senha:</label><br>
      <input class="Input" type="password" name="Password" required><br><br>

      <input class="Submit" type="submit" value="Entrar">
    </form>

    <p class="Links"><a href="user_register.php">Cadastrar Usuário</a></p>
    <p class="Links"><a href="user_delete.php">Deletar Usuário</a></p>
    <p class="Links"><a href="user_update.php">Atualizar Usuário</a></p>
    <p class="Links"><a href="Controllers/user_list.php">Listar Usuários</a></p>
  </body>
</html>
