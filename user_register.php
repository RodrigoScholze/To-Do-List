<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="Style/style.css">
  <head>
    <meta charset="utf-8">
    <title>Cadastrar Usuário - To Do List</title>
  </head>
  <body>
    <h1 class="Title">Cadastrar Usuário - To Do List</h1>
    <form action="Controllers/user_register.php" method="post">
      <label class="TitleInput">Digite o Usuário:</label><br>
      <input class="Input" type="text" name="User" required><br>

      <label class="TitleInput">Digite a Senha:</label><br>
      <input class="Input" type="password" name="Password_1" required><br>

      <label class="TitleInput">Digite a senha novamente:</label><br>
      <input class="Input" type="password" name="Password_2" required><br><br>

      <input class="Submit" type="submit" value="Registrar">
    </form>

    <p class="Links"><a href="../index.php">Inicio</a></p>
  </body>
</html>
