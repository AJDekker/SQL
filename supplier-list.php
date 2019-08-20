<?php
// UTF-8 NΟ BOM
session_start();
$_SESSION['list'] = 'customer-list.php';

include 'db.php';

// get result set
$sql = "SELECT * FROM supplier INNER JOIN product ON supplier.supplierNumber=product.supplierNumber ORDER BY name";
$rs = $pdo->query($sql, PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="nl">

    <head>
        <meta charset="UTF-8">
        <title>List</title>
        <link type="text/css" rel="stylesheet" href="layout.css">
    </head>

    <body>

        <nav>
            <?php require 'menu.inc.php'; ?>
        </nav>

        <h1>Review</h1>
        <!-- show result set -->
        <table>
            <tr>
                <th>Leverancier Naam
                <th>Adres
                <th>Stad
                <th>Postcode
                <th>Telefoonnummer
                <th>E-mail
            </tr>
            <?php while ($row = $rs->fetch()) { ?>
                <tr>

                    <td><?= $row->suppliername ?>
                    <td><?= $row->address ?>
                    <td><?= $row->city ?>
                    <td><?= $row->zip ?>
                    <td><?= $row->phonenumber ?>
                    <td><?= $row->email ?>
                </tr>
            <?php } ?>
        </table>
    </body>

</html>
