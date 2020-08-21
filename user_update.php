<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="Style/style.css">
  <head>
    <meta charset="utf-8">
    <title>Atualizar dados do usuário - To Do List</title>
  </head>
  <body>
    <h1 class="Title">Atualizar Usuário - To Do List</h1>
    <form action="Controllers/user_update.php" method="post">
      <label class="TitleInput">Digite o Usuário:</label><br>
      <input class="Input" type="text" name="User" required><br>

      <label class="TitleInput">Digite a Senha:</label><br>
      <input class="Input" type="password" name="Password" required><br><br><br><br>

      <label class="TitleInput">Digite o novo nome do usuário:</label><br>
      <input class="Input" type="text" name="New_User" required><br>

      <label class="TitleInput">Digite a nova senha:</label><br>
      <input class="Input" type="password" name="New_Password" required><br><br>

      <input class="Submit" type="submit" value="Modificar">
    </form>

    <p class="Links"><a href="../index.php">Inicio</a></p>
  </body>
</html>
