<?php
// UTF-8 NΟ BOM
session_start();
$_SESSION['list'] = 'customer-list.php';

include 'db.php';

// get result set
$sql = "SELECT * FROM review INNER JOIN product ON review.productNumber=product.productNumber ORDER BY name";
$rs = $pdo->query($sql, PDO::FETCH_OBJ);
?>
    <?php require 'menu.inc.php'; ?>


        <h1>Reviews</h1>



        <!-- show result set -->
        <table>
            <tr>
                <th>Product Naam
                <th>Titel
                <th>Review
                <th>Rating
            </tr>
            <?php while ($row = $rs->fetch()) { ?>
                <tr>

                    <td><?= $row->name ?>
                    <td><?= $row->title ?>
                    <td><?= $row->review ?>
                    <td><?= $row->rating ?>
                </tr>
            <?php } ?>
        </table>
    </body>

</html>
