<?php
echo "tram";
    $hostName = "http://maitram.net:2082/";
    $useName = "maitramn";
    $passWord = "421cuoi";
    $databaseName = "maitramn_appandroid";

    $con = new mysqli($hostName, $useName, $passWord, $databaseName);

    if($con -> connect_errno){
        echo "Fail to connect to mySQL" . $con ->connect_error;
    } else {
        $con -> set_charset("utf8");
    }