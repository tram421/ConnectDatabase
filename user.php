<?php
    require("connect.php");
    $query = "SELECT * FROM user";

    $data = $con -> query($query);

    $rowCount = mysqli_num_rows($data);

    $arrayUser = [];

    if($rowCount){
    while($row = mysqli_fetch_assoc($data)){
        array_push($arrayUser, new User
        (
            $row['id'], 
            $row['name'], 
            $row['address'],
            $row['phone'], 
            $row['idvoucher'], 
            $row['idorder']
        ));
        
    }
    echo json_encode($arrayUser);
    
}

class User 
{
    //phuong thuc dac biet
    function __construct($id, $name, $phone, $idvoucher, $idorder, $address)
    {
        $this -> id = $id;
        $this -> name = $name;
        $this -> phone = $phone;
        $this -> idvoucher = $idvoucher;
        $this -> idorder = $idorder;
        $this -> address = $address;

    }
}