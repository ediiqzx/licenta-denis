<?php include 'head.php'; ?>

<div class="account-content">
  <form class="register">
    <h1>ÎNREGISTREAZĂ-TE</h1>
    <input type="email" id="email-r" name="email-r" placeholder="Email-ul tau" required>
    <input type="password" id="pass1" name="pass1" placeholder="Parola ta" required>
    <input type="password" id="pass2" name="pass2" placeholder="Confirmare parola" required>
    <input id="send" type="submit" value="ÎNREGISTREAZĂ-TE">
  </form>
  <form class="login">
    <h1>CONECTEAZĂ-TE</h1>
    <input type="email" id="email-l" name="email-l" placeholder="Email-ul tau" required>
    <input type="password" id="pass" name="pass" placeholder="Parola ta" required>
    <input type="password" id="passf" name="passf" placeholder="Parola ta"> <!-- E pus aici doar ca sa arate ok design-ul, nu te folosi de el -->
    <input id="send" type="submit" value="CONECTEAZĂ-TE">
  </form>
</div>

<div class="footer">
  <p class="footer-text">Copyright © 2018, ClothingHERO - Magazin de haine online GALATI.</p>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/websitejs.js"></script>

</body>
</html>
