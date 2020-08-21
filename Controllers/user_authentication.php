<?php
    include '../Config/db_config.php';
    include '../Models/models.php';
    session_start();

    $Login_Instance = new User_Authentication($db_connect, $_POST["User"], $_POST["Password"]);

    if($Login_Instance->Login_User())
    {
      $_SESSION["Name"] = $_POST["User"];
      header("Location: task_list.php");
      exit();
    }
    else
    {
      echo  "<script>alert('Usuário e senha inválido');</script>";
      echo  "<script>javascript:window.location='../index.php';</script>";
    }
