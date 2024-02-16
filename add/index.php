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
      <h1 class="h5">Add a New Product Information</h1>
      <!-- enctype="multipart/form-data" -->
      <form id='add-product-form' class="need-validation" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="product_name" class="form-lable">
            Prodcut Name
          </label>
          <input name="product_name" class="form-control" type="text" max="255" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="mb-3">
          <label for="unit" class="form-lable">
            Unit
          </label>
          <input name="unit" class="form-control" type="text" max="255" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="mb-3">
          <label for="price" class="form-lable">
            Price
          </label>
          <input name="price"class="form-control" type="text" max="255" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="mb-3">
          <label for="date_of_expiry" class="form-lable">
            Date of Expiry
          </label>
          <input name="date_of_expiry" id="date_of_expiry" class="form-control" type="date" max="255" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="mb-3">
          <label for="available_in_inventory" class="form-lable">
            Available In Inventory
          </label>
          <input name="available_in_inventory" class="form-control" type="number" max="255" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <!-- <div class="mb-3">
          <label for="product_image" class="form-lable">
            Image <span class="my-h5">(max: 4mb)</span>
          </label>
          <input name="product_image" class="form-control" type="file" accepts="image/*"/>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div> -->
        <div>
          <button class="btn btn-primary" type="button" onclick="submitForm()">Submit</button>
          <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
      </form>
      <div id="result">
      </div>
    </div>
  </div>

    <!-- Your page content goes here -->
    <script>
        function submitForm() {
          let formData = $("#add-product-form").serialize();
          console.log(formData)

          $.ajax({
              type: "POST",
              url: "process.php",
              data: formData,
              success: function(response) {
                // console.log(response)
                  $("#result").html(response);
                  // You can add additional actions after successful submission
              }

    });
}
    </script>

</body>
</html>
