<?php
    include '../Config/db_config.php';
    include '../Models/models.php';
    session_start();

    $ID_USER = new User_CRUD($db_connect, $_SESSION["Name"], '');
    $List_Instance = new Tasks_CRUD($db_connect, '', '');
    $_SESSION["Tasks"] = $List_Instance->Select_Tasks($ID_USER->Select_ID_User());
    header('Location: ../tasks.php');
    exit();
