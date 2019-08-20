<?php
// UTF-8 NΟ BOM
session_start();
$_SESSION['list'] = 'customer-list.php';

include 'db.php';

// get result set
$sql = "CALL `GetAllCustomers`()";
$rs = $pdo->query($sql, PDO::FETCH_OBJ);
?>


    <?php require 'menu.inc.php'; ?>


        <h1>Klanten</h1>
        <nav>
            <a href = "customer-add.php" title = "add a record"><i class="fa fa-plus-circle"></i> Klant toevoegen</a>
        </nav>
        <!-- show result set -->
        <table>
            <tr>
                <th>
                <th>Naam
                <th>Telefoonnummer
                <th>Email
                <th>Adres
                <th>Stad
                <th>Postcode
                <th>Land
                <th>
            </tr>
            <?php while ($row = $rs->fetch()) { ?>
                <tr>
                    <td class="button"><a title="edit" href="customer-edit.php?customerNumber=<?= $row->customerNumber ?>"><i class="fa fa-edit"></i></a>

                    <td><?= $row->name ?>
                    <td><?= $row->phonenumber ?>
                    <td><?= $row->email ?>
                    <td><?= $row->adres ?>
                    <td><?= $row->city ?>
                    <td><?= $row->zip ?>
                    <td><?= $row->country ?>
                    <td class="button"><a title="delete" href="customer-delete.php?customerNumber=<?= $row->customerNumber ?>"><i class="fa fa-trash"></i></a>
                </tr>
            <?php } ?>
        </table>
      </div>
    </body>

</html>
