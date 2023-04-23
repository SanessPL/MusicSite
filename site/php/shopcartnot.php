<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "../../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Document</title>
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
               <a href="index.php" class="nav-link">
                  Strona Główna
               </a>
            </li>
            <li class="nav-item active text-center fs-3 p-3">
               <a href="../php/shop.php" class="nav-link">
                  Sklep
               </a>
            </li>
            <li class="nav-item active text-center fs-3 p-3">
               <a href="../php/aboutus.php" class="nav-link">
                  O nas
               </a>
            </li>
            <li class="nav-item active text-center fs-3 p-3">
               <a href="../php/contact.php" class="nav-link">
                  Kontakt
               </a>
            </li>
            <li class="nav-item active text-center fs-3 p-3">
            <a href="../php/login.php" class="nav-link">
             Zaloguj
           </a>
            <li class="nav-item active text-center fs-3 p-3">
               <a href="../php/shopcartnot.php" class="nav-link active">
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
            if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])){
               $total_price = 0;
               foreach($_SESSION['cart'] as $product){
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
            ?>
         </tbody>
      </table>
      <a href="shop.php" class="btn btn-dark">Powrót do sklepu</a>
      <a href="../php/clear_cart.php" class="btn btn-dark">Wyczyść koszyk</a>
   </div>
<script src="../../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>
</html>

