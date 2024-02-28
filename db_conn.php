<?php

    $sname = "localhost";
    $unmae = "root";
    $password = "";

    $db_name = "tist_db";

    $conn = mysqli_connect($sname, $unmae, $db_name);

    if(!$conn){
        echo "Connection Failed";
    }

