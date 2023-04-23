<?php
      session_start();
      unset($_SESSION['cart']);
      header("Location: ../php/shopcart.php");
      setcookie('cart_data', '', time() - 3600, '/');
?>