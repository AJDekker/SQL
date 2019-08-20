<?php
// UTF-8 NΟ BOM
session_start();
$_SESSION['list'] = 'customer-list.php';

include 'db.php';

// get result set
$sql = "SELECT product.productNumber, product.name, stock.amount FROM stock, product WHERE stock.productNumber = product.productNumber GROUP BY productNumber";
$rs = $pdo->query($sql, PDO::FETCH_OBJ);
?>
    <?php require 'menu.inc.php'; ?>


        <h1>Voorraad</h1>
      
        <!-- show result set -->
        <table>
            <tr>
                <th>Product ID
                <th>Product Naam
                <th>Voorraad
            </tr>
            <?php while ($row = $rs->fetch()) { ?>
                <tr>

                    <td><?= $row->productNumber ?>
                    <td><?= $row->name ?>
                    <td><?= $row->amount ?>
                </tr>
            <?php } ?>
        </table>
    </body>

</html>
