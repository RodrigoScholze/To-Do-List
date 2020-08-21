<?php
    include '../Config/db_config.php';
    include '../Models/models.php';
    session_start();

    $ID_USER = new User_CRUD($db_connect, $_SESSION["Name"], '');
    $Delete_Instance = new Tasks_CRUD($db_connect, $_POST["Task"], '');
    $Delete_Instance->Delete_Task($ID_USER->Select_ID_User());
    header('Location: task_list.php');
    exit();
