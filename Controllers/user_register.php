<?php
    include '../Config/db_config.php';
    include '../Models/models.php';

      if($_POST["Password_1"] == $_POST["Password_2"])
      {
        $Login_Instance = new User_Authentication($db_connect, $_POST["User"], $_POST["Password_1"]);
        if(!$Login_Instance->Login_User())
        {
          $Register_Instance = new User_CRUD($db_connect, $_POST["User"], $_POST["Password_1"]);
          $Register_Instance->Insert_User();
          echo  "<script>alert('Usuário cadastrado');</script>";
          echo  "<script>javascript:window.location='../index.php';</script>";
        }
        else
        {
          echo  "<script>alert('Usuário e senha já existe');</script>";
          echo  "<script>javascript:window.location='../index.php';</script>";
        }
      }
      else
      {
        echo  "<script>alert('Usuário não cadastrado, senhas digitadas não são iguais');</script>";
        echo  "<script>javascript:window.location='../index.php';</script>";
      }
