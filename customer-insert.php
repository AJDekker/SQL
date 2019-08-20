<?php
// UTF-8 NΟ BOM
session_start();
require 'db.php';

// get post parameter
$customerNumber = $_POST['customerNumber'];
$customerName = $_POST['customerName'];
$customerPhone = $_POST['customerPhone'];
$customerEmail = $_POST['customerEmail'];
$customerAdres = $_POST['customerAdres'];
$customerCity = $_POST['customerCity'];
$customerZip = $_POST['customerZip'];
$customerCountry = $_POST['customerCountry'];



// update record
$sql = "INSERT INTO customer (`name`, `phonenumber`, `email`, `adres`, `city`, `zip`, `country`) VALUES (?,?,?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$customerName, $customerPhone, $customerEmail, $customerAdres, $customerCity, $customerZip, $customerCountry]);
checkSQL($stmt);

// return to list
if(isset($_SESSION['list'])) {
    header('location: ' . $_SESSION['list']);   
} else {
    header('location: .');
}
