<?php
    require_once '../connect.php';

    $pdo = new StorePDO();
    DataMapper::init($pdo);

    $productMapper = new ProductMapper();

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

        if(isset($_GET['id'])){

            $id = $_GET['id'];
            $product = $productMapper->getProduct($id);
            echo json_encode($product);
        }
    }



?>