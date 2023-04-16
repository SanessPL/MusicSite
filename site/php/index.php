<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muzycznie</title>
    <link rel="icon" type="image/x-icon" href="../../Images/logo/fav.png">
    <link rel="stylesheet" href = "../../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">

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
     <a href="#" class="nav-link active">
        Strona Główna
     </a>
    </li>
    <li class="nav-item active text-center fs-3 p-3">
     <a href="#" class="nav-link">
        Sklep
     </a>
    </li>
    <li class="nav-item active text-center fs-3 p-3">
     <a href="#" class="nav-link">
        O nas
     </a>
    </li>
    <li class="nav-item active text-center fs-3 p-3">
     <a href="#" class="nav-link">
        Kontakt
     </a>
    </li>
    <li class="nav-item active text-center fs-3 p-3">
     <a href="#" class="nav-link">
        Zaloguj
     </a>
    </li>
    <li class="nav-item active text-center fs-3 p-3">
     <a href="#" class="nav-link">
        Koszyk
     </a>
    </li>
    </ul>
</div>
</div>
</nav>

<header id="header" class="vh-100" style="padding-top:400px; 
                                          background-image:url(../../Images/siteimages/quebonafide.avif);background-attachment:
                                          fixed;background-position: center;background-repeat: no-repeat; ">
   <div class="container">
      <div class="">
         <h1 class="text-capitalize text-white text-center">Najlepsze albumy w każdej<br> wersji którą lubisz.</h1>
      </div>
   </div>
</header>
<section id="Bestseller" class="py-5">
   <div class="container">
      <div class="title text-center">
         <h2 class="position-relative d-inline-block" >Bestsellery</h2>
      </div>
      <div class="collection-list mt-xl-4">
               <?php
               include('.//connect.php');
               $zap="SELECT ProductPhoto,ProductName, ProductPrize, ProductType, ProductAuthor FROM products WHERE bestseller = 'yes'";
               $query = mysqli_query($conn,$zap);
               while($row = mysqli_fetch_row($query)){
                  echo '<div class="text-center">';
                  echo '<div class="collection-img" style="border:1px solid black; width:300px; padding-top:20px; float:left; margin:50px; margin-left:75px;" col-md-12>';
                  echo'<img src="../../Images/'.$row[0].'" alt="bestsellers" class="" style="height:250px; width:auto; border:1px solid black;';
                  echo '</div>';
                  echo '<p class=""><br>'.$row[4].'</p>';
                  echo '<p class="">'.$row[1].'</p>';
                  echo '<p class="">'.$row[3].'</p>';
                  echo '<span class="">'.$row[2].' zł </span>';
                  echo '</div>';
               }
               ?>
      </div>                                          
   </div>
</section>



    <script src="../js/jquery-3.6.4.js"></script>
    <script src="../../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
