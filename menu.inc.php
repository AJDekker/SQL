
    <!DOCTYPE html>
    <html>
    <title>Smart Microwave</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="layout.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <style>
    html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif; overflow: visible !important;}
    #mySidebar{left:0px !important}
    </style>
    <script type="text/javascript" src="js/script.js"></script>
    <body class="w3-light-grey">

    <!-- Top container -->
    <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
      <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
      <span class="w3-bar-item w3-right">Smart Microwave</span>
    </div>
    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

<!--

  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Smart Microwave</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href = ".">home</a>
    <a class="p-2 text-dark" <a href = "customer-list.php">klanten</a>
    <a class="p-2 text-dark" <a href = "customer-list-2.php">orders</a>
    <a class="p-2 text-dark" <a href = "payment-list.php">payment</a>
    <a class="p-2 text-dark" <a href = "product-list.php">product</a>
    <a class="p-2 text-dark" <a href = "review-list.php">review</a>
    <a class="p-2 text-dark" <a href = "stock-list.php">stock</a>
    <a class="p-2 text-dark" <a href = "customer-list.php">suppliers</a>
  </nav>
</div> -->

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>

  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-eye fa-fw"></i>	&nbsp;  Home</a>
    <a href="customer-list.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i> 	&nbsp;  Klanten</a>
    <a href="customer-list-2.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-search  fa-fw"></i> 	&nbsp; Orders</a>
    <a href="payment-list.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-credit-card fa-fw"></i>	&nbsp;  Betalingen</a>
    <a href="product-list.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cube fa-fw"></i> 	&nbsp; Producten & leveranciers</a>
    <a href="supplier-list-2.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i>  	&nbsp;Leveranciers</a>
    <a href="review-list.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-comment fa-fw"></i> 	&nbsp; Review</a>
    <a href="stock-list.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cubes fa-fw"></i>  	&nbsp;Voorraad</a>
    <!-- <a href="customer-list.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i>  Gebruikers</a><br/> -->
  </div>
</nav>
