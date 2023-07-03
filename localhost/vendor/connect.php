<?php

    $connect = mysqli_connect('localhost', 'root', '', 'us-site1');

    if (!$connect) {
        die('Error connect to DataBase');
    }
