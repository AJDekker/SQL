<?php
/*
// UTF-8 NΟ BOM 
session_start();
$_SESSION['list'] = 'order-list.php';

include 'db.php';



// get result set
$sql = "SELECT * FROM order K "
        . " LEFT JOIN customer V ON K.customercustomerNumber = V.customerNumber "
        . " ORDER BY name";
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
            <a href = "order-new.php" title = "add a record">new</a>
        </nav>

        <h1>Klanten</h1>
        <!-- show result set -->
        <table>
            <tr>
                <th>
                <th>Nummer
                <th>Order date
                <th>Deliver date
                <th>Shipping adres
                <th>Shipping zib
                <th>Shipping city
                <th>Shipping country
                <th>Order message
                <th>Customer number
                <th>
            </tr>
            <?php while ($row = $rs->fetch()) { ?>
                <tr>
                    <td class="button"><a title="edit" href="customer-edit.php?KlantNr=<?= $row->orderNumber ?>">?</a>
                    <td><?= $row->order_date ?>
                    <td><?= $row->delivery_date ?>
                    <td><?= $row->shipping_adres ?>
                    <td><?= $row->shipping_zip ?>
                    <td><?= $row->shipping_city ?>
                    <td><?= $row->shipping_country ?>
                    <td><?= $row->order_message ?>
                    <td><?= $row->customercustomerNumber ?>
                    <td class="button"><a title="delete" href="customer-delete.php?KlantNr=<?= $row->KlantNr ?>">X</a>
                </tr>
            <?php } ?>
        </table>
    </body>

</html>

