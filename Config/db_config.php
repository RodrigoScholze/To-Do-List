<?php
    $user = 'root';
    $password = 's3nh@';
    $host = 'localhost:3306';
    $database = 'to_do_list_db';

    $db_connect = new mysqli($host, $user, $password, $database);
    $db_connect->set_charset('utf8mb4');
