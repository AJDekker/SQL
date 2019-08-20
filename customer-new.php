<?php
// UTF-8 NΟ BOM
session_start();
require 'db.php';

// insert record
$sql = "INSERT INTO customer (`name`, `phonenumber`, `email`, `adres`, `city`, `zip`, `country`) VALUES('', '', '', '', '', '', '')";
$stmt = $pdo->prepare($sql);
$stmt->execute();
checkSQL($stmt);

// return to list
if(isset($_SESSION['list'])) {
    header('location: ' . $_SESSION['list']);   
} else {
    header('location: .');
}

