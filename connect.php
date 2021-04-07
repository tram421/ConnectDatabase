<?php
    $hostName = "mysql06.dotvndns.vn";
    $useName = "maitramn_apiapp";
    $passWord = "muhnV#2;i#u&";
    $databaseName = "maitramn_appandroid";

    $con = new mysqli($hostName, $useName, $passWord, $databaseName);

    if($con -> connect_errno){
        echo "Fail to connect to mySQL" . $con ->connect_error;
    } else {
        $con -> set_charset("utf8");
    }
    
