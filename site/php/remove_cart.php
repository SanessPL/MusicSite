<?php
session_start();

if(isset($_POST['product_id']) && is_numeric($_POST['product_id'])) {
   $product_id = $_POST['product_id'];

   // Sprawdzamy, czy produkt istnieje w koszyku
   if(isset($_SESSION['cart']) && is_array($_SESSION['cart']) && !empty($_SESSION['cart'])){
      foreach($_SESSION['cart'] as $key => $product){
         if($product['ProductID'] == $product_id){
            // Usuwamy produkt z koszyka
            unset($_SESSION['cart'][$key]);
            break;
         }
      }
   }

   echo 'success';
} else {
   echo 'error';
}
?>