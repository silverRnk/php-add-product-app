<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <!-- Add your CSS styles or include external stylesheets here -->
    <link type="text/css" rel="stylesheet"  href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<?php
  

?>

<body>
  <div class="container">
    <div class="button-container">
      <a class='btn btn-primary' href="add">Add Product</a>
    </div>
    <div class="card my-card-style">
      <table class="table">
        <thead id='product-table-head'>
          <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Unit</th>
            <th scope="col">Price</th>
            <th scope="col">Date of Expiry</th>
            <th scope="col">Available in Inventory</th>
            <th scope="col">Available Inventory Cost</th>
            <th scope="col">Image</th>
            <th ></th>
          </tr>
        </thead>
        <tbody id='product-table-data' class="my-table-body">
          <!-- <tr>
            <th scope="row">Coke</th>
            <td>coke</td>
            <td>10.00</td>
            <td>2024-02-01</td>
            <td>3</td>
            <td>30</td>
            <td><img width="50" height="50" src='https://images.unsplash.com/photo-1554866585-cd94860890b7?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y29rZXxlbnwwfHwwfHx8MA%3D%3D' alt="N/A"/></td>
            <td>
              <div class="dropdown" style="margin:auto;">
                  <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="material-symbols-outlined">
                      more_vert
                    </span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="edit?id=1;">Edit</a></li>
                    <li><a class="dropdown-item" href="#">Delete</a></li>
                  </ul>
                </div>
              </td>
              <tr> -->
        </tbody>
      </table>
    </div>
  </div>

    <!-- Your page content goes here -->

    <script>
        function addTableRowAll(products){
          let tableBodyDOM = document.getElementById('product-table-data');
          data.forEach(prodcut => {

          })
        }

        function getProducts(){
          let xmlHttp = new XMLHttpRequest();
          xmlHttp.onreadystatechange = function() {
            if(this.readystate == 4 && this.status == 200){
              document.getElementById('product-table-dat').innerHTML = this.responseText 
            }
          }

          xmlHttp.open('GET', "init.php", true);
          xmlHttp.send();
        }
    </script>

    <script>
        getProducts();
    </script>

</body>
</html>
