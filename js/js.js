var config = {
    apiKey: "AIzaSyAcseCHMl_Q8MaUK_EZeDUld_G2YtRokGM",
    authDomain: "licenta-denis.firebaseapp.com",
    databaseURL: "https://licenta-denis.firebaseio.com",
    projectId: "licenta-denis",
    storageBucket: "licenta-denis.appspot.com",
    messagingSenderId: "986913344184"
  };
firebase.initializeApp(config);

function login(){
    var email = document.getElementById("email-l").value;
    var parola = document.getElementById("pass").value;
    
    firebase.auth().signInWithEmailAndPassword(email, parola).catch(function(error) {
    
    var errorCode = error.code;
    var errorMessage = error.message;
    switch (errorCode) {
      case "auth/invalid-email":
        alert("Wrong email or password.");
        break;
      case "auth/user-disabled":
        alert("Wrong email or password.");
        break;
      case "auth/user-not-found":
        alert("Wrong email or password.");
        break;
      case "auth/wrong-password":
        alert("Wrong email or password.");
        break;
    }
  });
  
  firebase.auth().onAuthStateChanged(function(user){
    if (user) {
      window.location.replace("index.php");
    }
  });
}

function register(){
  console.log("register");
    var email = document.getElementById("email-r").value;
    var parola = document.getElementById("pass1").value;

    firebase.auth().createUserWithEmailAndPassword(email, parola).catch(function(error) {
        
        var errorCode = error.code;
        var errorMessage = error.message;
        console.log(errorCode + " | " + errorMessage);
      });

      firebase.auth().onAuthStateChanged(function(user){
        if (user) {
          window.location.replace("login.php");
          //alert("success");
        }
      });
}

function logout(){
  firebase.auth().signOut().then(function() {
    window.location.replace('index.php');
  }).catch(function(error) {
    // error
  });
}

function goToCart(){
  var user = firebase.auth().currentUser;
    if (user) {
      window.location.replace("cart.php");
    } else {
      window.location.replace("login.php");
    }
}

function uploadProduct(){
  var uniqueId = Date.now();

  var nume = document.getElementById('produs').value;
  var short_desc = document.getElementById('short-desc').value;
  var long_desc = document.getElementById('long-desc').value;

  var p1 = document.getElementById('photo-1');
  var p2 = document.getElementById('photo-2');
  var p3 = document.getElementById('photo-3');
  var p4 = document.getElementById('photo-4');

  var index = 1;
  var sizes = [];
  for(i=1;i<=16;i++){
    var check = document.getElementById('size' + i);
    if(check.checked){
      sizes.push(check.value);
      index++;
    }
  }

  firebase.database().ref("products/" + uniqueId).set({
    nume: nume,
    short_desc: short_desc,
    long_desc: long_desc,
    sizes: sizes,
  }, function(error){
    if(!error){
      // alert("Postare efectuata cu succes!");
      // window.location.replace("admin-products.php");
    }
  });

  var storageRef = firebase.storage().ref('products/' + uniqueId + '/photo-1.png');
  storageRef.put(p1.files[0]);
  var storageRef = firebase.storage().ref('products/' + uniqueId + '/photo-2.png');
  storageRef.put(p2.files[0]);
  var storageRef = firebase.storage().ref('products/' + uniqueId + '/photo-3.png');
  storageRef.put(p3.files[0]);
  var storageRef = firebase.storage().ref('products/' + uniqueId + '/photo-4.png');
  storageRef.put(p4.files[0]);
}

function showProducts(admin){
  var ref = firebase.database().ref('products');
  ref.on('child_added', function(data){
    var product = document.createElement('div');
    product.className = 'product';
    var img = document.createElement('div');
    img.className = 'prod-img';
    firebase.storage().ref('products/' + data.key + '/photo-1.png').getDownloadURL().then(function(url){
      img.style.backgroundImage = "url(" + url + ")";
    });

    var title = document.createElement('h1');
    title.appendChild(document.createTextNode(data.val().nume));

    var short_desc = document.createElement('h2');
    short_desc.appendChild(document.createTextNode(data.val().short_desc));

    if(admin){
      var button = document.createElement('div');
      button.className = 'prod-bttn red';
      var a = document.createElement('a');
      a.appendChild(document.createTextNode("DELETE"));
      button.appendChild(a);
      button.onclick = function(){
        firebase.database().ref('products/' + data.key).remove();
        firebase.storage().ref('products/' + data.key + '/photo-1.png').delete();
        firebase.storage().ref('products/' + data.key + '/photo-2.png').delete();
        firebase.storage().ref('products/' + data.key + '/photo-3.png').delete();
        firebase.storage().ref('products/' + data.key + '/photo-4.png').delete();
      };
    }else{
      var button = document.createElement('div');
      button.className = 'prod-bttn red';
      var a = document.createElement('a');
      a.appendChild(document.createTextNode("VIEW"));
      button.appendChild(a);
      button.onclick = function(){
        localStorage.setItem("selectedProduct", data.key);
        window.location.replace("product.php");
    };
    }


    product.appendChild(img);
    product.appendChild(title);
    product.appendChild(short_desc);
    product.appendChild(button);

    document.getElementById('produse').appendChild(product);
  });
}

function loadProduct(){
  var id = localStorage.getItem('selectedProduct');

  var main = document.getElementById('product-content');
  
  var img = document.createElement('div');
  img.className = "prod-img-principal";
  firebase.storage().ref('products/' + id + '/photo-1.png').getDownloadURL().then(function(url){
    img.style.backgroundImage = "url(" + url + ")";
  });

  main.appendChild(img);

  firebase.database().ref('products/' + id).once('value').then(function(snapshot) {
    var h1 = document.createElement('h1');
    h1.appendChild(document.createTextNode(snapshot.val().nume));
    main.appendChild(h1);

    var h2 = document.createElement('h2');
    h2.appendChild(document.createTextNode(snapshot.val().short_desc));
    main.appendChild(h2);

    var buttons = document.createElement('div');
    buttons.className = "buttons";

    var select = document.createElement('select');
    for(i=0;i<snapshot.val().sizes.length;i++){
      var option = document.createElement('option');
      option.val = snapshot.val().sizes[i];
      option.text = snapshot.val().sizes[i];
      select.add(option);
    }
    buttons.appendChild(select);

    var add = document.createElement('div');
    add.className = 'add-button';
    var redirect = document.createElement('a');
    redirect.href = 'cart.php';
    var i = document.createElement('i');
    i.className = 'fa fa-cart-plus';
    redirect.appendChild(i);
    redirect.appendChild(document.createTextNode("Adaugă în coș"));
    add.appendChild(redirect);
    add.onclick = function(){
      var uid = firebase.auth().currentUser.uid;
      
      firebase.database().ref('users/' + uid + '/' + Date.now()).set({
        product: id,
        size: select.options[select.selectedIndex].value,
      });
    }

    buttons.appendChild(add);

    var long_desc = document.createElement('p');
    long_desc.appendChild(document.createTextNode(snapshot.val().long_desc));

    main.appendChild(buttons);
    main.appendChild(long_desc);
    main.appendChild(images);
  });

  var images = document.createElement('div');
  images.className = "images";

  firebase.storage().ref('products/' + id + '/photo-1.png').getDownloadURL().then(function(url){
    var img = document.createElement('img');
    img.className = 'secondary-img';
    img.src = "url(" + url + ")";
    images.appendChild(img);
  });

  firebase.storage().ref('products/' + id + '/photo-2.png').getDownloadURL().then(function(url){
    var img = document.createElement('img');
    img.className = 'secondary-img';
    img.src = "url(" + url + ")";
    images.appendChild(img);
  });

  firebase.storage().ref('products/' + id + '/photo-3.png').getDownloadURL().then(function(url){
    var img = document.createElement('img');
    img.className = 'secondary-img';
    img.src = "url(" + url + ")";
    images.appendChild(img);
  });

  firebase.storage().ref('products/' + id + '/photo-4.png').getDownloadURL().then(function(url){
    var img = document.createElement('img');
    img.className = 'secondary-img';
    img.src = "url(" + url + ")";
    images.appendChild(img);
  });

  //main.appendChild(images);
}

function loadCart(){
  var uid = firebase.auth().currentUser.uid;
  var main = document.getElementById('cart');

  var ref = firebase.database().ref('users/' + uid);
  ref.on('child_added', function(data){
    var produs = document.createElement('div');
    produs.className = 'produs';

    var prod_main = document.createElement('div');
    prod_main.className = 'prod-main';

    var prod_img = document.createElement('div');
    prod_img.className = 'prod-img';
    firebase.storage().ref('products/' + data.key + '/photo-1.png').getDownloadURL().then(function(url){
      prod_img.style.backgroundImage = "url(" + url + ")";
    });
    prod_main.appendChild(prod_img);

    produs.appendChild(prod_main);
  });
}
