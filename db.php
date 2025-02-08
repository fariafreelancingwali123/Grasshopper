<?php
$host = 'localhost'; // Database host
$user = 'uqhdwlwapjzga'; // Database user
$password = 'cl5g1gaqsg5u'; // Database password
$db = 'dbjpmditt3rswk'; // Database name

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
