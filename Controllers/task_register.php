<?php
    include '../Config/db_config.php';
    include '../Models/models.php';
    session_start();

    $ID_USER = new User_CRUD($db_connect, $_SESSION["Name"], '');
    $Insert_Instance = new Tasks_CRUD($db_connect, $_POST["Task"], $_POST["Task_Status"]);
    $Insert_Instance->Insert_Task($ID_USER->Select_ID_User());
    header('Location: task_list.php');
    exit();
