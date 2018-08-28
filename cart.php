<?php include 'head.php'; ?>

<div class="cart" id="cart">
  <div class="header">
    <h3 class="h-1">Produs</h3>
    <h3 class="h-2">Pret</h3>
    <h3 class="h-3">Cantitate</h3>
    <h3 class="h-4">Total</h3>
  </div>
</div>

<form class="checkout-form" id="form">
  <input type="text" id="nume" name="nume" placeholder="Numele tau" required>
  <input type="text" id="adresa" name="adresa" placeholder="Adresa de livrare" required>
  <input type="text" id="tlf" name="tlf" placeholder="Telefon de contact" required>
  <input value="&#xf218; Plaseaza comanda" style="font-family:Raleway, FontAwesome" onclick="comanda()">
</form>

<div class="footer">
  <p class="footer-text">Copyright © 2018, ClothingHERO - Magazin de haine online GALATI.</p>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/websitejs.js"></script>
<script>loadCart()</script>

</body>
</html>
