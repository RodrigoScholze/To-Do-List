<?php
    include '../Config/db_config.php';
    include '../Models/models.php';

    $Login_Instance = new User_Authentication($db_connect, $_POST["User"], $_POST["Password"]);

    if($Login_Instance->Login_User())
    {
      $Update_Instance = new User_CRUD($db_connect, $_POST["New_User"], $_POST["New_Password"]);
      $Update_Instance->Update_User($_POST["User"]);
      echo  "<script>alert('Dados modificados');</script>";
      echo  "<script>javascript:window.location='../index.php';</script>";
    }
    else
    {
      echo  "<script>alert('Dados não modificados, verifique o usuário e senha');</script>";
      echo  "<script>javascript:window.location='../index.php';</script>";
    }
