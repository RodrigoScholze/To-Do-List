<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="Style/style.css">
  <head>
    <meta charset="utf-8">
    <title>Deletar Usuário - To Do List</title>
  </head>
  <body>
    <h1 class="Title">Deletar Usuário - To Do List</h1>
    <form action="Controllers/user_delete.php" method="post">
      <label class="TitleInput">Digite o usuário que deseja deletar:</label><br>
      <input class="Input" type="text" name="User" required><br>

      <label class="TitleInput">Digite a senha desse usuário:</label><br>
      <input class="Input" type="password" name="Password" required><br><br>

      <input class="Submit" type="submit" value="Deletar">
    </form>

    <p class="Links"><a href="../index.php">Inicio</a></p>
  </body>
</html>
