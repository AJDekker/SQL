<?php
// UTF-8 NΟ BOM
session_start();
$_SESSION['list'] = 'customer-list.php';

include 'db.php';

// get result set
$sql = "CALL `GetAllProducts`()";
$rs = $pdo->query($sql, PDO::FETCH_OBJ);
?>
    <?php require 'menu.inc.php'; ?>


        <h1>Producten</h1>

        <!-- show result set -->
        <table>
            <tr>
                <th>Nummer
                <th>Name
                <th>Beschrijving
                <th>Specificaties
                <th>Prijs
                <th>Leverancier
                <th>Telefoonnummer
                <th>Emailadres
            </tr>
            <?php while ($row = $rs->fetch()) { ?>
                <tr>
                    <td><?= $row->productNumber ?>
                    <td><?= $row->name ?>
                    <td><?= $row->description ?>
                    <td><?= $row->specifications ?>
                    <td>€ <?= $row->price ?>
                    <td><?= $row->suppliername ?>
                    <td><?= $row->phonenumber ?>
                    <td><?= $row->email ?>

                </tr>
            <?php } ?>
        </table>
    </body>

</html>
