<?php
    require("connect.php");
    $query = "SELECT * FROM product";

    $data = $con -> query($query);

    $rowCount = mysqli_num_rows($data);

    $arrayProduct = [];

    if($rowCount){
    while($row = mysqli_fetch_assoc($data)){
        array_push($arrayProduct, new Product
        (
            $row['id'], 
            $row['name'], 
            $row['image'],
            $row['price'], 
            $row['sale'], 
            $row['description'],
            $row['idCategory'],
            $row['rate'],
            $row['similar'],
            $row['isFeature']
        ));
        
    }
    echo json_encode($arrayProduct);
    
}

class Product 
{
    //phuong thuc dac biet
    function __construct($id, $name, $image, $price, $sale, $description, $idCategory, $rate, $similar, $isFeature)
    {
        $this -> id = $id;
        $this -> name = $name;
        $this -> image = $image;
        $this -> price = $price;
        $this -> sale = $sale;
        $this -> description = $description;
        $this -> idCategory = $idCategory;
        $this -> rate = $rate;
        $this -> similar = $similar;
        $this -> isFeature = $isFeature;

    }
}