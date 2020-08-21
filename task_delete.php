<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="Style/style.css">
  <head>
    <meta charset="utf-8">
    <title>Deletar Tarefa - To Do List</title>
  </head>
  <body>
    <h1 class="Title">Deletar Tarefa - To Do List</h1>
    <form action="Controllers/task_delete.php" method="post">
      <label class="TitleInput">Digite a tarefa:</label><br>
      <input class="Input" type="text" name="Task" required><br><br>

      <input class="Submit" type="submit" value="Deletar">
    </form>

    <p class="Links"><a href="../index.php">Inicio</a></p>
  </body>
</html>
