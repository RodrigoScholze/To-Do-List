<?php
    include '../Config/db_config.php';
    include '../Models/models.php';

    $Login_Instance = new User_Authentication($db_connect, $_POST["User"], $_POST["Password"]);

    if($Login_Instance->Login_User())
    {
      $Delete_Instance = new User_CRUD($db_connect, $_POST["User"], $_POST["Password"]);
      $Delete_Instance->Delete_User();
      echo  "<script>alert('Usuário deletado');</script>";
      echo  "<script>javascript:window.location='../index.php';</script>";
    }
    else
    {
      echo  "<script>alert('Usuário não deletado, verifique o nome e a senha');</script>";
      echo  "<script>javascript:window.location='../index.php';</script>";
    }
