<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <!-- Add your CSS styles or include external stylesheets here -->
    <link type="text/css" rel="stylesheet"  href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container my-container-style">
    <div class="card my-card-style">
      <h1 class="h5">Edit a Product Information</h1>
      <form class="need-validation">
        <div class="mb-3">
          <label for="product_name" class="form-lable">
            Prodcut Name
          </label>
          <input name="product_name" class="form-control" type="text" max="255" required/>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="mb-3">
          <label for="unit" class="form-lable">
            Unit
          </label>
          <input name="unit" class="form-control" type="text" max="255" required/>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="mb-3">
          <label for="price" class="form-lable">
            Price
          </label>
          <input name="price"class="form-control" type="text" max="255" required/>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="mb-3">
          <label for="date_of_expiry" class="form-lable">
            Date of Expiry
          </label>
          <input name="date_of_expiry" class="form-control" type="text" max="255" required/>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="mb-3">
          <label for="available_in_inventory" class="form-lable">
            Available In Inventory
          </label>
          <input name="available_in_inventory" class="form-control" type="text" max="255" required/>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="mb-3">
          <label for="product_image" class="form-lable">
            Image <span class="my-h5">(max: 4mb)</span>
          </label>
          <input name="product_image" class="form-control" type="image" required/>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div>
          <button class="btn btn-primary" type="submit">Edit</button>
          <button class="btn btn-secondary" type="button">Cancel</button>
        </div>
      </form>
    </div>
  </div>

    <!-- Your page content goes here -->

    <script>
        (function () {
          const currentUrl = window.location.href;
          console.log(currentUrl)
          const queryParams = new URLSearchParams(window.location.search);

          const id = queryParams.get('id');

          console.log('id ' +id);
          $.ajax({
            type: 'GET',
            url: 'init.php',
            data: {id: id},
            success:function (response) {
              let product = JSON.parse(response);
              // console.log(response)
              // let product = response;

              $("input[name='product_name']").val(product['product_name'])
              $("input[name='unit']").val(product['unit'])
              $("input[name='price']").val(product['price'])
              $("input[name='date_of_expiry']").val(product['date_expiry'])
              $("input[name='available_in_inventory']").val(product['available_inventory'])
              $("input[name='product_image']").val(product['product_image'])
              
            }
          })
        })()
    </script>

</body>
</html>
