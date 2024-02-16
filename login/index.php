<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX POST Request</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<form id="myForm" method="POST" enctype="multipart/form-data">
    <label for="data">Data:</label>
    <input type="text" id="data" name="data" required>
    <button type="button" onclick="sendData()">Submit</button>
</form>

<script>
function sendData() {
    var formData = $("#myForm").serialize();

    $.ajax({
        type: "POST",
        url: "process.php",
        data: formData,
        success: function(response) {
            console.log(response);
            // Handle the response from the server
        },
        error: function(error) {
            console.error(error);
            // Handle errors
        }
    });
}
</script>

</body>
</html>
