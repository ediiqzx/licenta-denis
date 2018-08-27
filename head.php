<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Clothing HERO</title> <!-- Website's name -->

  <link href="css/style.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
  <script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
  <script src="js/js.js"></script>
</head>

<body>
  <nav>
    <a href="index.php"><h1 class="title">Clothing <span style="font-weight:700">HERO</span></h1></a>
    <input type="text" placeholder="&#xF002; Caută un produs..." autocomplete="off" style="font-family:Raleway, FontAwesome">
    <div class="nav-links">
      <a id="nav-1" onclick="goToCart()"><i class="fa fa-shopping-cart"></i>CART</a>
      <a href="login.php" id="nav-2">Register / Login</a>
      <a id="nav-3" onclick="logout()">Logout</a>
      <a href="contact.php" id="nav-4">Contact</a>
    </div>
  </nav>
