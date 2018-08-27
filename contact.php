<?php include 'head.php'; ?>

<div class="row">
  <form action="#">
    <div class="form-row">
      <input type="text" id="nume" name="nume" placeholder="Numele tau" required>
      <input type="email" id="email" name="email" placeholder="Email-ul tau" required>
    </div>
    <textarea id="mesaj" name="mesaj" placeholder="Mesajul tau"></textarea>
    <input id="send" type="submit" value="&#xf1d8; Trimite mesajul" style="font-family:Raleway, FontAwesome">
  </form>
  <div class="details">
    <h1>DATE DE CONTACT</h1>
    <h2><strong><i class="fa fa-phone"></i> TELEFON: </strong>0754 543 653</h2>
    <h2><strong><i class="fa fa-envelope"></i> EMAIL: </strong>heroclothing@gmail.com</h2>
    <h2><strong><i class="fa fa-globe"></i> ADRESA: </strong>Str. Licentei Nr 10, Bloc A1, Ap. 22</h2>
  </div>
</div>

<div class="mapouter">
  <div class="gmap_canvas">
    <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=FEAA%20galati&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <a href="https://www.pureblack.de"></a>
  </div>
  <style>
    .mapouter{text-align:right;height:300px;width:calc(100% - 80px);margin: 0 40px 40px 40px;}
    .gmap_canvas{overflow:hidden;background:none!important;height:300px;width:100%;}
  </style>
</div>

<div class="footer">
  <p class="footer-text">Copyright © 2018, ClothingHERO - Magazin de haine online GALATI.</p>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/websitejs.js"></script>

</body>
</html>
