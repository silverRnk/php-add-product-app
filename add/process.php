<?php

require_once '../connect.php';

$pdo = new StorePDO();
DataMapper::init($pdo);

$productMapper = new ProductMapper();


// if($_SERVER['REQUEST_METHOD'] == 'POST'){

//     if(isset($_FILES['product_image'])){
//         $uploadDirectory = 'uploads/';
//         $uploadedFile = $uploadDirectory . basename($_FILES['product_image']['name']);

//         if(!move_uploaded_file($_FILES['product_image']['tmp_name'], $uploadedFile)){
//         echo 'Error File cannot be upload';  
//      }
//     }
    
//     $product = $_POST['product_name'];
//     $unit = $_POST['unit'];
//     $price =  $_POST['price'];
//     $dateOfExpiry = $_POST['date_of_expirty'];
//     $inventory = $_POST['available_in_inventory'];


//     echo "<p><strong>Product Name:</strong> $product</p>";
//     echo "<p><strong>Unit:</strong> $unit</p>";
//     echo "<p><strong>Price:</strong> $price</p>";
//     echo "<p><strong>Date of Expiry:</strong> $dateOfExpiry</p>";
//     echo "<p><strong>Available in Inventory:</strong> $inventory</p>";
//     echo "<p><strong>Product Image:</strong> <img src='$uploadedFile' alt='product_image'/></p>";

// }

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_FILES['product_image'])){
        $uploadDirectory = 'uploads/';
        $uploadedFile = $uploadDirectory . basename($_FILES['product_image']['name']);

        if(!move_uploaded_file($_FILES['product_image']['tmp_name'], $uploadedFile)){
        echo 'Error File cannot be upload';  
     }
    }

    
    $id = $productMapper->create(array('product_name' => $_POST['product_name'], 
    'unit' => $_POST['unit'], 'price' => $_POST['price'], 
    'date_expiry' => $_POST['date_of_expiry'], 'available_inventory' => $_POST['available_in_inventory']));

    echo $id;
    $producItem = $productMapper->getProduct($id);

    foreach($producItem as $row){
        $product = $row['product_name'];
        $unit = $row['unit'];
        $price =  $row['price'];
        $dateOfExpiry = $row['date_expiry'];
        $inventory = $row['available_inventory'];

        echo "<p><strong>Product Name:</strong> $product</p>";
        echo "<p><strong>Unit:</strong> $unit</p>";
        echo "<p><strong>Price:</strong> $price</p>";
        echo "<p><strong>Date of Expiry:</strong> $dateOfExpiry</p>";
        echo "<p><strong>Available in Inventory:</strong> $inventory</p>";
    }
}

    
    // echo "<p><strong>Product Image:</strong> <img src='$uploadedFile' alt='product_image'/></p>";

?>





</html>
