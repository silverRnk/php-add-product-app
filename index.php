<?php
  
  require_once 'pre.php';

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
            console.log('status', this.status)
            console.log('state ' + this.state);
            if(this.status == 200){
              
              document.getElementById('product-table-data').innerHTML = this.responseText 
            }
          }

          xmlHttp.open('GET', "init.php?", true);
          xmlHttp.send();
        }

        function deleteRow(id){
            // console.log(id);
            $.ajax({
              type: "GET",
              url: "delete.php",
              data:{id: id},
              success: function(response) {
                alert(response);
                $('#product-table-data').empty();
                getProducts();
              },
              error: function(response) {
                alert(response)
              }
            })
          }
    </script>

    <script>
        getProducts();
    </script>

</body>
</html>
