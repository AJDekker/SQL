<?php
// UTF-8 NΟ BOM
session_start();
$_SESSION['list'] = 'customer-list.php';

include 'db.php';

// get result set
$sql = "SELECT * FROM `getSuppliers` ";
$rs = $pdo->query($sql, PDO::FETCH_OBJ);
?>
    <?php require 'menu.inc.php'; ?>

        <h1>Leverancier</h1>
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
