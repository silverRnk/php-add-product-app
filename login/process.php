<?php

require_once '../connect.php';
$pdo = new StorePDO();

DataMapper::init($pdo);

$productMapper = new ProductMapper();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the posted data
    $postData = $_POST['data'];

    // Process the data (you can perform any server-side logic here)

    // Respond with a message (for demonstration purposes)
    echo "Data received: " . $postData;
} else {
    // Handle invalid requests
    header("HTTP/1.1 400 Bad Request");
    echo "Invalid request method";
}
?>
