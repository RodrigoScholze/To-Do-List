<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="Style/style.css">
  <head>
    <meta charset="utf-8">
    <title>Lista de Usuários - To Do List</title>
  </head>
  <body>
    <h1 class="Title">Lista de Usuários - To Do List</h1>

    <table class='Table'>
      <tr>
        <th>Usuários</th>
      </tr>
      <?php
          session_start();
          if(isset($_SESSION["Users"]))
          {
            for ($index = 0; $index < count($_SESSION["Users"]); $index++)
            {
              echo '<tr>
                        <td>'.$_SESSION["Users"][$index][0].'</td>
                    </tr>';
            }
          }
      ?>
    </table>
    <p class="Links"><a href="../index.php">Inicio</a></p>
  </body>
</html>
