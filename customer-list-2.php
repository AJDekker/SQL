<?php
// UTF-8 NΟ BOM
session_start();


$_SESSION['list'] = 'customer-list-2.php';

include 'db.php';


// get result set
$sql = "SELECT * FROM ((`order` INNER JOIN `customer` ON  customer.customerNumber = order.customerNumber) INNER JOIN `order_product` ON order.orderNumber = order_product.orderNumber) INNER JOIN `product` ON order_product.productNumber = product.productNumber ORDER BY customer.name";
$rs = $pdo->query($sql, PDO::FETCH_OBJ);
?>

    <?php require 'menu.inc.php'; ?>


        <h1>Orders</h1>
      
        <!-- show result set -->
        <table>
            <tr>
                <th>Nummer
                <th>Name
                <th>Order date
                <th>Deliver date
                <th>Shipping adres
                <th>Shipping city
                <th>Shipping country
                <th>Product number
                <th>Amount
                <th>Name
                <th>Description
                <th>Specifications
                <th>Price
            </tr>
            <?php while ($row = $rs->fetch()) {?>
                <tr>
                    <td><?= $row->customerNumber ?>
                    <td><?= $row->name ?>
                    <td><?= $row->order_date ?>
                    <td><?= $row->deliver_date ?>
                    <td><?= $row->shipping_adres ?>
                    <td><?= $row->shipping_city ?>
                    <td><?= $row->shipping_country ?>
                    <td><?= $row->productNumber ?>
                    <td><?= $row->amount ?>
                    <td><?= $row->name ?>
                    <td><?= $row->description ?>
                    <td><?= $row->specifications ?>
                    <td><?= $row->price ?>
                </tr>
            <?php } ?>
        </table>
    </body>

</html>
