
<?php require 'menu.inc.php'; require 'db.php' ?>
<!-- Header -->
<header class="w3-container" style="padding-top:22px">
  <h5><b> Smart Microwave Dashboard</b></h5>
</header>

<div class="w3-row-padding w3-margin-bottom">
  <div class="w3-quarter">
    <div class="w3-container w3-red w3-padding-16">
      <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
      <div class="w3-right">
        <h3>
          <?php
          $sql = "SELECT COUNT(*) as number FROM review ";
          $rs = $pdo->query($sql, PDO::FETCH_OBJ);
          while($row = $rs->fetch()){
            echo $row->number;
          }
          ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Review's</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-cube w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
            <?php
            $sql = "SELECT COUNT(*) as number FROM product ";
            $rs = $pdo->query($sql, PDO::FETCH_OBJ);
            while($row = $rs->fetch()){
              echo $row->number;
            }
            ?></h3>
          </div>
          <div class="w3-clear"></div>
          <h4>Producten</h4>
        </div>
      </div>
      <div class="w3-quarter">
        <div class="w3-container w3-teal w3-padding-16">
          <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
          <div class="w3-right">
            <h3>
              <?php
              $sql = "SELECT  COUNT(*) as number FROM `customer`";
              $rs = $pdo->query($sql, PDO::FETCH_OBJ);
              while($row = $rs->fetch()){
                echo $row->number;
              }
              ?>
            </h3>
          </div>
          <div class="w3-clear"></div>
          <h4>Klanten</h4>
        </div>
      </div>
      <div class="w3-quarter">
        <div class="w3-container w3-orange w3-text-white w3-padding-16">
          <div class="w3-left"><i class="fa fa-search w3-xxxlarge"></i></div>
          <div class="w3-right">
            <h3>
              <?php
              $sql = "SELECT  COUNT(*) as number FROM `order`";
              $rs = $pdo->query($sql, PDO::FETCH_OBJ);
              while($row = $rs->fetch()){
                echo $row->number;
              }
              ?>
            </h3>
          </div>
          <div class="w3-clear"></div>
          <h4>Orders </h4>
        </div>
      </div>
    </div>

    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>
            <?php
            $sql = "SELECT COUNT(`order`.`orderNumber`) AS order_betaald
FROM `order`, `payment`
WHERE `order`.`orderNumber` = payment.orderNumber
AND payment.status = 'payed'";
            $rs = $pdo->query($sql, PDO::FETCH_OBJ);
            while($row = $rs->fetch()){
              echo $row->order_betaald;
            }
            ?></h3>
          </div>
          <div class="w3-clear"></div>
          <h4>Aantal order betaald</h4>
        </div>
      </div><div class="w3-quarter">
        <div class="w3-container w3-green w3-padding-16">
          <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
          <div class="w3-right">
            <h3>
              <?php
              $sql = "SELECT COUNT(`order`.`orderNumber`) AS order_betaald
  FROM `order`";
              $rs = $pdo->query($sql, PDO::FETCH_OBJ);
              while($row = $rs->fetch()){
                echo $row->order_betaald;
              }
              ?></h3>
            </div>
            <div class="w3-clear"></div>
            <h4>Aantal orders</h4>
          </div>
        </div>


    <div class="w3-panel">
      <div class="w3-row-padding" style="margin:0 -16px">

        <div class="w3-container">
          <h5>Review's</h5>
          <table class="w3-table w3-striped w3-white">

            <?php
            $sql = "SELECT * FROM `review` INNER JOIN `customer` ON customer.customerNumber = review.customerNumber LIMIT 10";
            $rs = $pdo->query($sql, PDO::FETCH_OBJ);
            while($row = $rs->fetch()){
              echo "<tr><td><i class='fa fa-comment w3-text-blue w3-large'></i></td>";
              echo "<td>$row->title</td>";
              echo "<td>$row->name</td></tr>";
            }
            ?>

          </table>
        </div>
      </div>
    </div>
    <hr>
    <div class="w3-half">
      <h5>Meest recente ratings:</h5>
      <?php
      $sql = "SELECT review.rating, product.productNumber, product.name FROM review INNER JOIN product ON review.productNumber=product.productNumber LIMIT 5";
      $rs = $pdo->query($sql, PDO::FETCH_OBJ);
      while($row = $rs->fetch()){

        if(round($row->rating) == 1){
          $rating = "20%";
        }else if(round($row->rating) == 2){
          $rating = "40%";
        }else if(round($row->rating) == 3){
          $rating = "60%";
        }else if(round($row->rating) == 4){
          $rating = "80%";
        }else if(round($row->rating) == 5){
          $rating = "100%";
        }
        echo "<p style=' margin-top:10px; margin-bottom:0px;'>$row->name</p>";
        echo "<div class='w3-grey' style='padding:0px;'>";
        echo "<div class='w3-container w3-center w3-padding w3-orange' style='width:$rating'>$rating</div></div>";
      }
      ?>

    </div>


    <div class="w3-half">
      <h5>Gemiddelde rating per product:</h5>
      <?php
      $sql = "SELECT AVG(review.rating) as rating, product.name FROM review INNER JOIN product ON review.productNumber=product.productNumber GROUP BY review.productNumber LIMIT 5 ";
      $rs = $pdo->query($sql, PDO::FETCH_OBJ);
      while($row = $rs->fetch()){

        if(round($row->rating) == 1){
          $rating = "20%";
        }else if(round($row->rating) == 2){
          $rating = "40%";
        }else if(round($row->rating) == 3){
          $rating = "60%";
        }else if(round($row->rating) == 4){
          $rating = "80%";
        }else if(round($row->rating) == 5){
          $rating = "100%";
        }
        echo "<p style=' margin-top:10px; margin-bottom:0px;'>$row->name</p>";
        echo "<div class='w3-grey' style='padding:0px;'>";
        echo "<div class='w3-container w3-center w3-padding w3-orange' style='width:$rating'>$rating</div></div>";
      }
      ?>

    </div>



    <div class="w3-container" style="margin-top: 30px;" >
      <hr>
      <h5>Aantal review(s) per klant</h5>
        <table  class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white" >
          <tr><th>Aantal reviews</th><th>Naam klant</th></tr>

          <?php
          $sql = "SELECT COUNT(*) as number, customer.name FROM review INNER JOIN customer ON customer.customerNumber=review.customerNumber GROUP BY review.customerNumber LIMIT 5";
          $rs = $pdo->query($sql, PDO::FETCH_OBJ);
          while($row = $rs->fetch()){
            echo "<tr><td>".$row->name."</td>";
              echo "<td>".$row->number."x</td></tr>";
          }
          ?>
        </table><br>
      </div>
      <!-- <button class="w3-button w3-dark-grey">More Countries  <i class="fa fa-arrow-right"></i></button> -->
    <hr>
    <div class="w3-half" >
      <h5>Aantal orders per maand</h5>
        <table  class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white" >
          <tr><th>Order datum</th><th>Aantal</th></tr>

          <?php
          $sql = "SELECT COUNT(*) as aantal, order.order_date FROM `order` GROUP BY MONTH(order.order_date) LIMIT 5";
          $rs = $pdo->query($sql, PDO::FETCH_OBJ);
          while($row = $rs->fetch()){
            echo "<tr><td>".date('F', strtotime($row->order_date))."</td>";
              echo "<td>".$row->aantal."</td></tr>";
          }
          ?>
        </table><br>
      <!-- <button class="w3-button w3-dark-grey">More Countries  <i class="fa fa-arrow-right"></i></button> -->
    </div>


    <div class="w3-half" >
      <h5>Aantal producten zijn er besteld/verkocht</h5>
        <table  class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white" >
          <tr><th>Product naam</th><th>Aantal besteld</th><th>Omzet per product</th></tr>

          <?php
          $sql = "SELECT product.name, SUM(order_product.amount) as aantal_besteld, product.price as product_price
FROM `order`, `order_product`, `product`
WHERE `order`.`orderNumber` = order_product.orderNumber
AND order_product.productNumber = product.productNumber
GROUP BY product.name";
          $rs = $pdo->query($sql, PDO::FETCH_OBJ);
          while($row = $rs->fetch()){
            echo "<tr><td>".$row->name."</td>";
              echo "<td>".$row->aantal_besteld."</td>";
                echo "<td>€ ".$row->aantal_besteld * $row->product_price."</td></tr>";
          }
          ?>
        </table><br>
      <!-- <button class="w3-button w3-dark-grey">More Countries  <i class="fa fa-arrow-right"></i></button> -->
    </div>


    <div class="w3-container" >
      <h5>Aantal producten zijn er besteld/verkocht per klant</h5>
        <table  class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white" >
          <tr><th>Naam klant</th><th>Product naam</th><th>Aantal orders</th></tr>

          <?php
          $sql = "
SELECT customer.name, COUNT(order.orderNumber) AS aantal_orders, SUM(order_product.amount) AS aantal, product.name AS product_name FROM ((`customer` INNER JOIN `order` ON customer.customerNumber=order.customerNumber) INNER JOIN `order_product` ON order.orderNumber=order_product.orderNumber) INNER JOIN `product` ON order_product.productNumber=product.productNumber GROUP BY customer.customerNumber ";
          $rs = $pdo->query($sql, PDO::FETCH_OBJ);
          while($row = $rs->fetch()){
            echo "<tr><td>".$row->name."</td>";
              echo "<td>".$row->product_name."</td>";
              echo "<td>".$row->aantal * $row->aantal_orders."</td></tr>";
          }
          ?>
        </table><br>
      <!-- <button class="w3-button w3-dark-grey">More Countries  <i class="fa fa-arrow-right"></i></button> -->
    </div>



  </div>
</body>
</html>
