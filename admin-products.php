<?php include 'head.php'; ?>

<form class="add-product">
  <h1>Adauga un produs!</h1>
  <div class="columns">
    <div class="col-1">
      <input type="text" id="produs" name="produs" placeholder="Numele produsului">
      <textarea id="short-desc" name="short-desc" placeholder="Scurta descriere a produsului"></textarea>
    </div>
    <textarea id="long-desc" name="long-desc" placeholder="Lunga descriere a produsului"></textarea>
  </div>
  <div class="sizes">
    <p class="name">Alege marimile disponibile:</p>
    <input type="checkbox" value="35" id="size1" class="inactive-size">35</p>
    <input type="checkbox" value="36" id="size2" class="inactive-size">36</p>
    <input type="checkbox" value="37" id="size3" class="inactive-size">37</p>
    <input type="checkbox" value="38" id="size4" class="inactive-size">38</p>
    <input type="checkbox" value="39" id="size5" class="inactive-size">39</p>
    <input type="checkbox" value="40" id="size6" class="inactive-size">40</p>
    <input type="checkbox" value="41" id="size7" class="inactive-size">41</p>
    <input type="checkbox" value="42" id="size8" class="inactive-size">42</p>
    <input type="checkbox" value="43" id="size9" class="inactive-size">43</p>
    <input type="checkbox" value="44" id="size10" class="inactive-size">44</p>
    <input type="checkbox" value="45" id="size11" class="inactive-size">45</p>
    <input type="checkbox" value="XS" id="size12" class="inactive-size">XS</p>
    <input type="checkbox" value="S" id="size13" class="inactive-size">S</p>
    <input type="checkbox" value="M" id="size14" class="inactive-size">M</p>
    <input type="checkbox" value="L" id="size15" class="inactive-size">L</p>
    <input type="checkbox" value="XL" id="size16" class="inactive-size">XL</p>
  </div>
  <div class="price">
    <p class="name">Adauga pretul produsului:</p>
    <input type="text" id="price" name="price" placeholder="100"><p><strong>RON</strong></p>
  </div>
  <h2>Incarca poza principala si 3 poze secundare ale produsului!</h2>
  <div class="images">
    <input type="file" name="photo-1" autocomplete="off" id="photo-1">
    <input type="file" name="photo-2" autocomplete="off" id="photo-2">
    <input type="file" name="photo-3" autocomplete="off" id="photo-3">
    <input type="file" name="photo-4" autocomplete="off" id="photo-4">
  </div>
  <input onclick="uploadProduct()" value="&#xf1d8; Adauga produsul" style="font-family:Raleway, FontAwesome">
</form>

<h1 style="margin-left: 40px;">Elimină produse vechi</h1>
<div class="content-products" id="produse">
</div>

<div class="footer">
  <p class="footer-text">Copyright © 2018, ClothingHERO - Magazin de haine online GALATI.</p>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/websitejs.js"></script>
<script>showProducts(true);</script>

</body>
</html>
