<?php include 'head.php'; ?>

<div class="account-content">
  <form class="register">
    <h1>ÎNREGISTREAZĂ-TE</h1>
    <input type="text" id="email-r" name="email-r" placeholder="Email-ul tau" required>
    <input type="text" id="pass1" name="pass1" type="password" placeholder="Parola ta" required>
    <input type="text" id="pass2" name="pass2" type="password" placeholder="Confirmare parola" required>
    <input type="button" value="ÎNREGISTREAZĂ-TE" onclick="register()">
  </form>
  <form class="login">
    <h1>CONECTEAZĂ-TE</h1>
    <input type="text" id="email-l" name="email-l" placeholder="Email-ul tau" required>
    <input type="text" id="pass" name="pass" type="password" placeholder="Parola ta" required>
    <!--<input type="text" id="passf" name="passf" type="password" placeholder="Parola ta">-->
    <input type="button" value="CONECTEAZĂ-TE" onclick="login()">
  </form>
</div>

<div class="footer">
  <p class="footer-text">Copyright © 2018, ClothingHERO - Magazin de haine online GALATI.</p>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/websitejs.js"></script>

</body>
</html>
