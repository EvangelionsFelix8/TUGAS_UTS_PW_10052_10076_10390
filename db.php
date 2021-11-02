<?php
    $host = "sql305.epizy.com";
    $user = "epiz_30148287";
    $pass = "V6P5q2eVVazfFt";
    $name = "epiz_30148287_tubes_UTS_PW_3";

    $con = mysqli_connect($host, $user, $pass, $name);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }
?>