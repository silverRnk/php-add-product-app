<?php
    
    // require_once 'connect.php';

    // $pdo = new MyPDO();
    // DataMapper::init($pdo);

    // $productMapper = new ProductMapper();

    // $products = $productMapper->getProducts();
    $products = [1, 2, 3];

    foreach ($products as $row) {
        echo '<tr>';
        echo    '<th scope="row">' .'Coke'.'</th>';
        echo    '<td>'.'Coke 8oz'.'</td>';
        echo    '<td>10.00</td>';
        echo    '<td>2024-02-01</td>';
        echo    '<td>3</td>';
        echo    '<td>30</td>';
        echo    '<td><img width="50" height="50" 
        src=\'\' alt=\"N/A\"/></td>';
        echo    '<td>';
            //   <div class="dropdown" style="margin:auto;">
            //       <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            //         <span class="material-symbols-outlined">
            //           more_vert
            //         </span>
            //       </button>
            //       <ul class="dropdown-menu">
            //         <li><a class="dropdown-item" href="edit?id=1;">Edit</a></li>
            //         <li><a class="dropdown-item" href="#">Delete</a></li>
            //       </ul>
            //     </div>
        echo      '</td>';
        echo    '<tr>';
    }



?>

