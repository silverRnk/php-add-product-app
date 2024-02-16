
<?php
    
    require_once 'connect.php';

    $pdo = new StorePDO();
    DataMapper::init($pdo);

    $productMapper = new ProductMapper();


    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $products = $productMapper->getProducts();
    // $products = [1, 2, 3];

    foreach ($products as $row) {
        $totalPrice = $row['price']*$row['available_inventory'];

        echo '<tr>';
        echo    '<th scope="row">'.$row['product_name'].'</th>';
        echo    '<td>'.$row['unit'].'</td>';
        echo    '<td>'.$row['price'].'</td>';
        echo    '<td>'.$row['unit'].'</td>';
        echo    '<td>'.$row['available_inventory'].'</td>';
        echo    '<td>'.$totalPrice.'</td>';
        echo    '<td><img width="50" height="50" 
        src=\'uploads\\Coke_80z.jpg\' alt=\"N/A\"/></td>';
        echo    '<td>';
        echo '<div class="dropdown" style="margin:auto;">';
        echo '  <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">';
        echo '    <span class="material-symbols-outlined">';
        echo '      more_vert';
        echo '    </span>';
        echo '  </button>';
        echo '  <ul class="dropdown-menu">';
        echo '    <li><a class="dropdown-item" href="edit?id=1;" >Edit</a></li>';
        echo '    <li><button class="dropdown-item" onclick="deleteRow('.$row['id'].')">Delete</button></li>';
        echo '  </ul>';
        echo '</div>';
        echo      '</td>';
        echo    '<tr>';
    }
    }
    

?>

