<?php
// UTF-8 NΟ BOM
session_start();
require 'db.php';
include "menu.inc.php";
// get url parameter
$customerNumber = $_GET['customerNumber'];

// get record
$sql = "SELECT * FROM customer WHERE customerNumber = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$customerNumber]);
checkSQL($stmt);

$row = $stmt->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="nl">

    <head>
        <meta charset="UTF-8">
        <title>List</title>
        <link type="text/css" rel="stylesheet" href="layout.css">
    </head>


    <body>

        <form method="post" action="customer-save.php">
            <nav>
                <button> <a href="customer-list.php" title="back to list"><i class="fa fa-chevron-left"></i></a></button>
                <button title="save" type="submit"> <a href="" ><i class="fa fa-save"></i></a></button>
                <button title="reset" type="reset"><a href=""><i class="fa fa-undo-alt"></i></a></button>
            </nav>

            <h1>Klant</h1>

             <label>
                Klant nummer
                <input type="text" readonly name="customerNumber" value="<?= $row->customerNumber ?>">
            </label>

            <label>
                Naam
                <input type="text" name="customerName" value="<?= $row->name ?>">
            </label>

            <label>
                Telefoonnummer
                <input type="text" name="customerPhone" value="<?= $row->phonenumber ?>">
            </label>

            <label>
                Email-adres
                <input type="text" name="customerEmail" value="<?= $row->email ?>">
            </label>

            <label>
                Adres
                <input type="text" name="customerAdres" value="<?= $row->adres ?>">
            </label>

            <label>
                Stad
                <input type="text" name="customerCity" value="<?= $row->city ?>">
            </label>

            <label>
                Postcode
                <input type="text" name="customerZip" value="<?= $row->zip ?>">
            </label>

            <label>
                Land
                <input type="text" name="customerCountry" value="<?= $row->country ?>">
            </label>

        </form>
    </body>

</html>

