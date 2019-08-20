<?php
// UTF-8 NΟ BOM
session_start();
//$_SESSION['list'] = 'customer-list.php';
echo "";
include 'db.php';

// get result set
$sql = "SELECT * FROM (((`payment` INNER JOIN `order` ON  payment.paymentNumber = order.orderNumber) INNER JOIN `customer` ON order.customerNumber = customer.customerNumber) INNER JOIN `order_product` ON order.orderNumber = order_product.orderNumber) INNER JOIN `product` ON order_product.productNumber = product.productNumber ORDER BY customer.name";
$rs = $pdo->query($sql, PDO::FETCH_OBJ);

?>

    <?php require 'menu.inc.php'; ?>


        <h1>Betalingen</h1>


        <!-- show result set -->
        <table>
            <tr>
                <th>Klant naam
                <th>Telefoonnummer
                <th>Email
                <th>Productnumber
                <th>Hoeveelheid
                <th>Prijs
            </tr>
            <?php while ($row = $rs->fetch()) { ?>
                <tr>

                    <td><?= $row->name ?>
                    <td><?= $row->phonenumber ?>
                    <td><?= $row->email ?>
                    <td><?= $row->productNumber ?>
                    <td><?= $row->amount ?>
                    <td>€ <?= $row->amount * $row->price ?>

                </tr>
            <?php } ?>
        </table>
    </body>

</html>
