<?php
    require_once 'connect.php';

    $pdo = new StorePDO();
    DataMapper::init($pdo);

    $productMapper = new ProductMapper();

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        
        // echo 'Succesfully Deleted;
        if(isset($_GET['id'])){

            $id = $_GET['id'];
            $status = $productMapper->delete($id);

            if($status = 1){
                echo  $id.' is succesfully deleted';
            }else{
                echo 'Something went wrong';
            }
        }
    }




?>