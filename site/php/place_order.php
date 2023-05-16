<?php 
session_start(); 
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != true){
   // Użytkownik jest zalogowany
   // Można wczytywać inną stronę po zalogowaniu
   header("Location: index.php"); // Przykładowe przekierowanie na inną stronę po zalogowaniu
   exit;
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    require_once('connect.php');

    $UserID = $_SESSION['userID'];
    $Payment = $_POST['payment_method'];
    $Products = $_COOKIE['cart_data'];

    $sql = "INSERT INTO orders(UserID,Products,Payment,OrderDate) VALUES ($UserID,'$Products','$Payment',CURRENT_DATE)";
    $zap = mysqli_query($con, $sql);
    require('clear_cart.php');
    header("Location: confirmation.php");
}
?>