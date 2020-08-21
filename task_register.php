<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="Style/style.css">
  <head>
    <meta charset="utf-8">
    <title>Incluir Tarefa - To Do List</title>
  </head>
  <body>
    <h1 class="Title">Registar Tarefa - To Do List</h1>
    <form action="Controllers/task_register.php" method="post">
      <label class="TitleInput">Digite a tarefa:</label><br>
      <input class="Input" type="text" name="Task" required><br>

      <input type="radio" name="Task_Status" value="A fazer" checked> A fazer<br>
      <input type="radio" name="Task_Status" value="Em andamento"> Em andamento<br>
      <input type="radio" name="Task_Status" value="Concluido"> Concluido

      <input class="Submit" type="submit" value="Incluir">
    </form>

    <p class="Links"><a href="../index.php">Inicio</a></p>
  </body>
</html>
