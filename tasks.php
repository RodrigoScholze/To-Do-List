<?php
    session_start();
    if(!$_SESSION["Name"])
    {
      header("Location: index.php");
      exit();
    }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="Style/style.css">
  <head>
    <meta charset="utf-8">
    <title>Lista de tarefas</title>
  </head>
  <body>
      <h1 class="Title">Lista De Tarefas - To Do List</h1>
      <h3 class="Message"><?php echo $_SESSION["Name"]." está logado/a"; ?></h3>
      <p class="Links"><a href="Controllers/user_logout.php">Sair</a></p><br><br><br>
      <table class='Table'>
        <tr>
          <th>Tarefa</th>
          <th>Status</th>
        </tr>
      <?php
          if(isset($_SESSION["Tasks"]))
          {
            for ($index = 0; $index < count($_SESSION["Tasks"]); $index++)
            {
              echo '<tr>
                        <td>'.$_SESSION["Tasks"][$index][0].'</td>
                        <td>'.$_SESSION["Tasks"][$index][1].'</td>
                    </tr>';
            }
          }
      ?>
      </table>
      <p class="Links"><a href="task_register.php">Incluir Tarefa</a></p>
      <p class="Links"><a href="task_delete.php">Deletar Tarefa</a></p>
      <p class="Links"><a href="task_update.php">Modificar Tarefa</a></p>
  </body>
</html>
