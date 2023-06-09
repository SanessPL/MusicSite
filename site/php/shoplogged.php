<?php 
session_start(); 
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != true){
   // Użytkownik jest zalogowany
   // Można wczytywać inną stronę po zalogowaniu
   header("Location: shop.php"); // Przykładowe przekierowanie na inną stronę po zalogowaniu
   exit;
}
?>
<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muzycznie</title>
    <link rel="icon" type="image/x-icon" href="../../Images/logo/favicon.png">

    <link rel="stylesheet" href = "../../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
   .music-player {
      position: relative;
   }
   .play-pause-btn {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50px;
      height: 50px;
      background-color: black; 
      color: white; 
      border: none;
      outline: none;
      cursor: pointer;
      font-size: 24px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
   }
   .play-pause-btn:hover {
      opacity: 0.8;
   }
   .progress-bar-wrapper {
      width: 100%;
      height: 5px;
      background-color: #f2f2f2;
   }
   .progress-bar {
      height: 100%;
      background-color: black;
      width: 0%;
   }
</style>

</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
<div class="container">
<a href="index.php" class="navbar-brand mb-0 h1 fs-1 text-uppercase">
    Muzycznie.pl
</a>
<button 
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarNav"
class="navbar-toggler"
aria-controls="navbarNav"
aria-expanded="false"
aria-label="Toggle navigation"
>
   <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse justify-content-center " id="navbarNav"> 
    <ul class="navbar-nav">
    <li class="nav-item active text-center fs-3 p-3 fw-light">
     <a href="../php/index.php" class="nav-link">
        Strona Główna
     </a>
    </li>
    <li class="nav-item active text-center fs-3 p-3">
     <a href="../php/shop.php" class="nav-link active">
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
     <a href="../php/logout.php" class="nav-link">
        Wyloguj
     </a>
    </li>
    <li class="nav-item active text-center fs-3 p-3">
     <a href="../php/shopcart.php" class="nav-link">
        Koszyk
     </a>
    </li>
    </ul>
</div>
</div>
</nav>

<header id="header" class="vh-100" style="padding-top:450px; 
                                          background-image:url(../../Images/siteimages/zobaczsklep1.jpg);background-attachment:
                                          fixed;background-position: center;background-repeat: no-repeat; ">
   <div class="container">
      <div class="">
         <h1 class="text-capitalize text-white text-center">Nasz sklep</h1>
      </div>
   </div>
</header>
<section id="Shop" class="py-5">
   <div class="container">
      <div class="title text-center">
         <h2 class="position-relative d-inline-block">Nasz sklep<br></h2>
      </div>
      <div class="collection-list mt-4">
         <div class="row">
            <?php
            include('connect.php');
            $zap="SELECT ProductPhoto,ProductName, ProductPrize, ProductType, ProductAuthor, ProductDemo, ProductID FROM products";
            $query = mysqli_query($con,$zap);
            while($row = mysqli_fetch_row($query)){
               echo '<div class="col-md-6 col-lg-4 p-2 text-center">';
               echo '<div class="collection-img">';
               echo '<img src="../../Images/'.$row[0].'" alt="shopitems" class="w-50 h-auto" style="height:250px; width:auto; border:1px solid black;">';
               echo '</div>';
               echo '<div>';
               echo '<p class=""><br><br><b>'.$row[4].'</b></p>';
               echo '<span class="text-capitalize my-1">'.$row[1].'</span><br>';
               echo '<span class="">'.$row[3].'</span><br>';
               echo '<span class="">'.$row[2].' zł </span>';
               echo '<br><button class="btn btn-danger mt-2 add-to-cart-btn" data-product-id="'.$row[6].'">Do Koszyka</button>'; 
               echo '</div>';
               echo '<div class="music-player mt-3">';
               echo '<audio class="audio-player" src="../../Music/'.$row[5].'" preload="metadata"></audio>';
               echo '<div class="progress-bar-wrapper">';
               echo '<div class="progress-bar"></div>';
               echo '</div>';
               echo '<br><br><br><button class="btn btn-dark play-pause-btn"><i class="fas fa-play"></i></button>'; 
               echo '</div>';
               echo '</div>';
            }
            ?>
         </div>
      </div>                                          
   </div>
</section>

<footer class="bg-white text-dark" style="box-shadow: 3px 3px 9px 3px rgba(0,0,0,0.1);">
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


    <script src="../js/jquery-3.6.4.js"></script>
    <script src="../../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
    <script>
      var audioPlayers = document.querySelectorAll('.audio-player');
      var progressBars = document.querySelectorAll('.progress-bar');
      var playPauseBtns = document.querySelectorAll('.play-pause-btn');

      audioPlayers.forEach(function(player, index) {
         player.addEventListener('play', function() {
            var progressBar = progressBars[index];
            var progressInterval = setInterval(function() {
               var progress = (player.currentTime / player.duration) * 100;
               progressBar.style.width = progress + '%';
            }, 100);
            
            player.addEventListener('pause', function() {
               clearInterval(progressInterval);
            });

            player.addEventListener('ended', function() {
               clearInterval(progressInterval);
               progressBar.style.width = '0%';
               playPauseBtns[index].innerHTML = '<i class="fas fa-play"></i>';
            });
         });
      });

      playPauseBtns.forEach(function(btn, index) {
         btn.addEventListener('click', function() {
            var audioPlayer = audioPlayers[index];
            if (audioPlayer.paused) {
               audioPlayer.play();
               btn.innerHTML = '<i class="fas fa-pause"></i>'; 
            } else {
               audioPlayer.pause();
               btn.innerHTML = '<i class="fas fa-play"></i>';
            }
         });
      });

      $(document).ready(function(){
   $('.add-to-cart-btn').on('click', function(){
        var productId = $(this).data('product-id'); 
        $.ajax({
            url: 'add_to_cart.php', 
            method: 'post',
            data: {productId: productId}, 
            success: function(response){
                if(response == 'success'){
                    alert('Produkt został dodany do koszyka!');
                } else {
                    alert('Wystąpił błąd podczas dodawania do koszyka. Spróbuj ponownie.');
                }
            }
        });
    });
});


   </script>
</body>
</html>