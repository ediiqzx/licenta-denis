<?php include 'head.php'; ?>

<div class="cart" id="cart">
  <div class="header">
    <h3 class="h-1">Produs</h3>
    <h3 class="h-2">Pret</h3>
    <h3 class="h-3">Cantitate</h3>
    <h3 class="h-4">Total</h3>
  </div>
  <div class="produs">
    <div class="prod-main">
      <div class="prod-img" style="background-image: url(img/p1.jpg);"></div>
      <p><i class="fa fa-times"></i> Adidasi NIKE Arrowz Albi</p>
    </div>
    <p class="prod-price">200 RON</p>
    <input type="number" name="quantity" min="1" max="10">
    <p class="prod-price-total">400 RON</p>
  </div>
  <div class="produs">
    <div class="prod-main">
      <div class="prod-img" style="background-image: url(img/p1.jpg);"></div>
      <p><i class="fa fa-times"></i> Adidasi NIKE Arrowz Albi</p>
    </div>
    <p class="prod-price">200 RON</p>
    <input type="number" name="quantity" min="1" max="10">
    <p class="prod-price-total">400 RON</p>
  </div>
  <div class="produs">
    <div class="prod-main">
      <div class="prod-img" style="background-image: url(img/p1.jpg);"></div>
      <p><i class="fa fa-times"></i> Adidasi NIKE Arrowz Albi</p>
    </div>
    <p class="prod-price">200 RON</p>
    <input type="number" name="quantity" min="1" max="10">
    <p class="prod-price-total">400 RON</p>
  </div>
</div>

<form class="checkout-form">
  <input type="text" id="nume" name="nume" placeholder="Numele tau">
  <input type="text" id="adresa" name="adresa" placeholder="Adresa de livrare">
  <input type="text" id="tlf" name="tlf" placeholder="Telefon de contact">
  <input id="send" type="submit" value="&#xf218; Plaseaza comanda" style="font-family:Raleway, FontAwesome">
</form>

<div class="footer">
  <p class="footer-text">Copyright © 2018, ClothingHERO - Magazin de haine online GALATI.</p>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/websitejs.js"></script>
<script>loadCart()</script>

</body>
</html>
