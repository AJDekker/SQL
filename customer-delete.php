<?php
// UTF-8 NΟ BOM
session_start();
require 'db.php';

// get url parameter
$customerNumber = $_GET['customerNumber'];

// delete record
$sql = 'DELETE FROM customer WHERE customerNumber = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$customerNumber]);
checkSQL($stmt);

// return to list
if(isset($_SESSION['list'])) {
    header('location: ' . $_SESSION['list']);   
} else {
    header('location: .');
}
