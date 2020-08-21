<?php
    include '../Config/db_config.php';
    include '../Models/models.php';

    $Update_Instance = new Tasks_CRUD($db_connect, $_POST["Task"], $_POST["Task_Status"]);
    $Update_Instance->Update_Task($_POST["New_Task"]);
    header('Location: task_list.php');
    exit();
