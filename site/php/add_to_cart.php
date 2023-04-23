<?php
session_start();

if(isset($_POST['productId'])){
   $productId = $_POST['productId'];
   
   include('connect.php'); 
   $query = "SELECT * FROM products WHERE ProductID = '$productId'";
   $result = mysqli_query($con, $query);
   $row = mysqli_fetch_assoc($result);
   if($row){
      if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])){
         $_SESSION['cart'][] = $row;
      } else {
         $_SESSION['cart'] = array($row);
      }

     
      $cartData = json_encode($_SESSION['cart']); 
      setcookie('cart_data', $cartData, time() + 86400, '/'); 
      echo 'success'; 
   } else {
      echo 'error'; 
   }
}
?>