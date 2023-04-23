<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="../../Images/logo/favicon.png">

    <title>Muzycznie</title>
    <script>
   function updateCartItem(product_id, quantity) {
      $.ajax({
         type: 'POST',
         url: '../php/remove_cart.php',
         data: {product_id: product_id, quantity: quantity},
         success: function(data) {
            location.reload();
         }
      });
   }

   function removeCartItem(product_id) {
      $.ajax({
         type: 'POST',
         url: 'remove_cart.php',
         data: {product_id: product_id},
         success: function(data) {
            location.reload();
         }
      });
   }

   // Dodajemy funkcję do aktualizacji ceny na stronie po zmianie ilości
   function updatePrice(quantity, productPrice, rowId) {
      var totalPrice = quantity * productPrice;
      document.getElementById('total-price-' + rowId).innerHTML = totalPrice + ' zł';
   }
   </script>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
   <div class="container">
      <a href="index.php" class="navbar-brand mb-0 h1 fs-1 text-uppercase">
         Muzycznie.pl
      </a>
      <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center " id="navbarNav"> 
         <ul class="navbar-nav">
            <li class="nav-item active text-center fs-3 p-3 fw-light">
               <a href="indexlogged.php" class="nav-link">
                  Strona Główna
               </a>
            </li>
            <li class="nav-item active text-center fs-3 p-3">
               <a href="../php/shoplogged.php" class="nav-link">
                  Sklep
               </a>
            </li>
            <li class="nav-item active text-center fs-3 p-3">
               <a href="../php/aboutuslogged.php" class="nav-link">
                  O nas
               </a>
            </li>
            <li class="nav-item active text-center fs-3 p-3">
               <a href="../php/contactlogged.php" class="nav-link">
                  Kontakt
               </a>
            </li>
            <li class="nav-item active text-center fs-3 p-3">
               <a href="../php/logout.php" class="nav-link">
                  Wyloguj
               </a>
            </li>
            <li class="nav-item active text-center fs-3 p-3">
               <a href="../php/shopcart.php" class="nav-link active">
                  Koszyk
               </a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<div class="container mt-5">
      <h2><br><br><br>Koszyk</h2>
      <table class="table mt-3">
         <thead>
            <tr>
               <th scope="col">Zdjęcie</th>
               <th scope="col">Nazwa</th>
               <th scope="col">Typ</th>
               <th scope="col">Cena</th>
               <th scope="col">Ilość</th>
               <th scope="col">Akcje</th>
            </tr>
         </thead>
         <tbody>
         <?php
         session_start();
         if(isset($_COOKIE['cart_data'])){ // Sprawdzenie, czy istnieje plik cookie z danymi koszyka
            $cartData = json_decode($_COOKIE['cart_data'], true); // Odczytanie danych koszyka z pliku cookie i zdekodowanie ich do tablicy PHP
            if(is_array($cartData)){
               $total_price = 0;
               foreach($cartData as $product){
                  echo '<tr>';
                  echo '<td><img src="../../Images/'.$product['ProductPhoto'].'" alt="'.$product['ProductName'].'" style="height:50px; width:auto;"></td>';
                  echo '<td>'.$product['ProductName'].'</td>';
                  echo '<td>'.$product['ProductType'].'</td>';
                  echo '<td>'.$product['ProductPrize'].' zł</td>';
                  echo '<td><input type="number" min="1" value="'.(isset($product['quantity']) ? $product['quantity'] : 1).'" onchange="updateCartItem('.$product['ProductID'].', this.value)" name="quantity"></td>';
                  echo '<td><button class="btn btn-danger" onclick="removeCartItem('.$product['ProductID'].')">Usuń</button></td>';
                  echo '</tr>';
                  $total_price += $product['ProductPrize'] * (isset($product['quantity']) ? $product['quantity'] : 1);
               }
               echo '<tr><td colspan="4" class="text-right">Łączna cena: '.$total_price.' zł</td><td></td><td></td></tr>';
            } else {
               echo '<tr><td colspan="6">Koszyk jest pusty.</td></tr>';
            }
         } else {
            echo '<tr><td colspan="6">Koszyk jest pusty.</td></tr>';
         }
         ?>
         </tbody>
      </table>
      <a href="shop.php" class="btn btn-dark">Powrót do sklepu</a>
      <a href="../php/clear_cart.php" class="btn btn-dark">Wyczyść koszyk</a>
      <br><br><br>
      <h2><br>Sposoby płatności:</h2>
      <form action="place_order.php" method="post">
      <div class="form-check mt-3">
         <input class="form-check-input" type="radio" name="payment_method" value="karta" checked>
         <label class="form-check-label">
            Karta kredytowa/debetowa
         </label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="payment_method" value="blik">
         <label class="form-check-label">
            BLIK
         </label>
      </div>
      <div class="form-check">
         <input class="form-check-input" type="radio" name="payment_method" value="platnosc_przy_odbiorze">
         <label class="form-check-label">
            Płatność przy odbiorze
         </label>
      </div>
      <button type="submit" class="btn btn-dark mt-3">Płacę i zamawiam! <br></button>
   </form>
   </div>


   <footer class="bg-white text-dark" style="box-shadow: 3px 3px 9px 3px rgba(0,0,0,0.1); margin-top:50px;">
  <div class="container py-4">
    <div class="row">
      <div class="col-md-3">
        <h5 class="mb-3">Obsługa klienta</h5>
        <ul class="list-unstyled">
          <li><a href="#link1" class="text-dark">Centrum informacji</a></li>
          <li><a href="#link2" class="text-dark">FAQ</a></li>
          <li><a href="#link3" class="text-dark">Dostawa i płatność</a></li>
          <li><a href="#link4" class="text-dark">Zwroty, wymiana i reklamacje</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="mb-3">Informacje</h5>
        <ul class="list-unstyled">
          <li><a href="#link4" class="text-dark">Regulamin sklepu</a></li>
          <li><a href="#link5" class="text-dark">Polityka prywatności</a></li>
          <li><a href="#link6" class="text-dark">Polityka cookies</a></li>
          <li><a href="#link7" class="text-dark">Newsletter</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="mb-3">Poradniki</h5>
        <ul class="list-unstyled">
          <li><a href="#link7" class="text-dark">Jak sprawdzić czy używany winyl nie jest zepsuty?</a></li>
          <li><a href="#link8" class="text-dark">Ozdoby ze starych płyt i winyli</a></li>
          <li><a href="#link9" class="text-dark">Ratowanie porysowanych CD</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h5 class="mb-3">Forum</h5>
        <ul class="list-unstyled">
          <li><a href="#link10" class="text-dark">Zadaj własne pytanie</a></li>
          <li><a href="#link11" class="text-dark">Znajdź pytania których nie ma w FAQ</a></li>
          <li><a href="#link12" class="text-dark">Polecaj muzykę innym</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="bg-dark py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="text-center text-md-start mb-0 text-white" >© 2023 Muzycznie.pl Wszelkie prawa zastrzeżone.</p>
        </div>
        <div class="col-md-6">
          <ul class="list-inline text-center text-md-end mb-0">
            <li class="list-inline-item"><a href="#facebook" class="text-white">Facebook</a></li>
            <li class="list-inline-item"><a href="#twitter" class="text-white">Twitter</a></li>
            <li class="list-inline-item"><a href="#instagram" class="text-white">Instagram</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="../../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>
</html>

