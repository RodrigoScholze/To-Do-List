<?php
    include '../Config/db_config.php';
    include '../Models/models.php';
    session_start();

    $List_Instance = new User_CRUD($db_connect, '', '');
    $_SESSION["Users"] = $List_Instance->Select_Users();
    header('Location: ../user_list.php');
    exit();
