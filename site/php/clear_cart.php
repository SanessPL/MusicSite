<?php
      session_start();
      unset($_SESSION['cart']);
      header("Location: ../php/shopcart.php");
?>