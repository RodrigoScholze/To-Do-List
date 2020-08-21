<?php
    include '../Config/db_config.php';
    include '../Models/models.php';

    $Logout_Instance = new User_Authentication($db_connect, '', '');
    $Logout_Instance->Logout_User();
    header('Location: ../index.php');
    exit();
