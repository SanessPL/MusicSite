<?php
session_start(); // Rozpoczęcie sesji

if(isset($_POST['productId'])){
   $productId = $_POST['productId'];
   
   // Sprawdzenie, czy produkt o podanym ID istnieje w bazie danych
   include('connect.php'); // Połączenie z bazą danych
   $query = "SELECT * FROM products WHERE ProductID = '$productId'";
   $result = mysqli_query($con, $query);
   $row = mysqli_fetch_assoc($result);
   if($row){
      // Dodanie produktu do koszyka w sesji
      if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])){
         // Jeśli koszyk już istnieje w sesji, dodaj nowy produkt
         $_SESSION['cart'][] = $row;
      } else {
         // Jeśli koszyk nie istnieje w sesji, utwórz nowy koszyk i dodaj produkt
         $_SESSION['cart'] = array($row);
      }
      echo 'success'; // Odpowiedź sukcesu dla AJAX
   } else {
      echo 'error'; // Odpowiedź błędu dla AJAX
   }
}
?>