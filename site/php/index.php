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
      <div class="collection-list mt-4 ">
         <div class="col-md-6 col-lg-4  p-2 ">
         <div class="text-center" >
               <?php
               include('.//connect.php');
               $zap="SELECT ProductPhoto,ProductName, ProductPrize, ProductType, ProductAuthor FROM products WHERE bestseller = 'yes'";
               $query = mysqli_query($conn,$zap);
               while($row = mysqli_fetch_row($query)){
                  echo '<div class="collection-img" >';
                  echo'<img src="../../Images/'.$row[0].'" alt="bestsellers" class="w-50 h-auto" style="height:250px; width:auto; border:1px solid black;';
                  echo '</div>';
                  echo '<div>';
                  echo '<p class=""><br><br><b>'.$row[4].'</b></p>';
                  echo '<span class="text-capitalize my-1">'.$row[1].'</span><br>';
                  echo '<span class="">'.$row[3].'</span><br>';
                  echo '<span class="">'.$row[2].' zł </span><br><br>';
                  echo '<button type="button" class="btn btn-danger btn-lg">Do Koszyka</button>';
                  echo '</div>';
               }
               ?>
               </div>
            </div>
      </div>                                          
   </div>
</section>

<section  class="vh-100" style="          padding-top:400px;
                                          background-image:url(../../Images/siteimages/problem1.jpg);background-attachment:
                                          fixed;background-position: center;background-repeat: no-repeat; ">
   <div class="container">
      <div class="">
         <h1 class="text-capitalize text-white text-center">Rzetelne artykuły o twoich<br> ulubionych artystach.</h1>
      </div>
   </div>
</section>
<section id="blogs" class="py-5">
   <div class="container">
      <div class="title text-center py-5">
         <h2 class="position-relative d-inline-block">
            Blog
         </h2>
      </div>

      <div class="row">
         <div class="card border-0 col-md-6 col-lg-4 bg-transparent text-center" >
            <img src="../../Images/siteimages/janblog.jpg" alt="Jan Rapowanie"  class="blog">
            <div class="card body px-0 border-0">
               <h4 class="card-title">
               <br>Lorem Ipsum is simply dummy text
               </h4>
               <p class="card-text mt-3 text-muted" >
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
               when an unknown printer took a galley of type and scrambled it to make a type specimen book.
               It has survived not only five centuries, but also the leap into electronic typesetting, 
               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
               sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
               like Aldus PageMaker including versions of Lorem Ipsum.
               </p>
               <p class="card-text">
                  <small class="text-muted">
                     <span class="">Autor:</span> Karol Poplewski
                  </small>
               </p>
               <a href="#" class="btn btn-dark">Czytaj więcej</a><br><br>
            </div>
         </div>
         <div class="card border-0 col-md-6 col-lg-4 bg-transparent text-center" >
            <img src="../../Images/siteimages/problemblog.jpeg" alt="PRO8L3M" class="blog" style="height:234px; object-fit: cover; object-position: 100% 20%;">
            <div class="card body px-0 border-0">
               <h4 class="card-title">
               <br>Lorem Ipsum is simply dummy text
               </h4>
               <p class="card-text mt-3 text-muted" >
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
               when an unknown printer took a galley of type and scrambled it to make a type specimen book.
               It has survived not only five centuries, but also the leap into electronic typesetting, 
               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
               sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
               like Aldus PageMaker including versions of Lorem Ipsum.
               </p>
               <p class="card-text">
                  <small class="text-muted">
                     <span class="">Autor:</span> Karol Poplewski
                  </small>
               </p>
               <a href="#" class="btn btn-dark">Czytaj więcej</a><br><br>
            </div>
         </div>
         <div class="card border-0 col-md-6 col-lg-4 bg-transparent text-center" >
            <img src="../../Images/siteimages/que.jpg" alt="Quebonafide"  class="blog" style="height:234px; object-fit: cover; object-position: 100% 20%;">
            <div class="card body px-0 border-0">
               <h4 class="card-title">
               <br>Lorem Ipsum is simply dummy text
               </h4>
               <p class="card-text mt-3 text-muted" >
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
               when an unknown printer took a galley of type and scrambled it to make a type specimen book.
               It has survived not only five centuries, but also the leap into electronic typesetting, 
               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
               sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
               like Aldus PageMaker including versions of Lorem Ipsum.
               </p>
               <p class="card-text">
                  <small class="text-muted">
                     <span class="">Autor:</span> Karol Poplewski
                  </small>
               </p>
               <a href="#" class="btn btn-dark">Czytaj więcej</a><br><br>
            </div>
         </div>
         <div class="card border-0 col-md-6 col-lg-4 bg-transparent text-center" >
            <img src="../../Images/siteimages/drake.jpg" alt="Drake"  class="blog" style="height:234px; object-fit: cover; object-position: 100% 20%;">
            <div class="card body px-0 border-0">
               <h4 class="card-title">
               <br>Lorem Ipsum is simply dummy text
               </h4>
               <p class="card-text mt-3 text-muted" >
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
               when an unknown printer took a galley of type and scrambled it to make a type specimen book.
               It has survived not only five centuries, but also the leap into electronic typesetting, 
               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
               sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
               like Aldus PageMaker including versions of Lorem Ipsum.
               </p>
               <p class="card-text">
                  <small class="text-muted">
                     <span class="">Autor:</span> Karol Poplewski
                  </small>
               </p>
               <a href="#" class="btn btn-dark">Czytaj więcej</a><br><br>
            </div>
         </div>

         <div class="card border-0 col-md-6 col-lg-4 bg-transparent text-center" >
            <img src="../../Images/siteimages/kacperczyk.jpg" alt="Bracia Kacperczyk"  class="blog" style="height:234px; object-fit: cover; object-position: 100% 20%;">
            <div class="card body px-0 border-0">
               <h4 class="card-title">
               <br>Lorem Ipsum is simply dummy text
               </h4>
               <p class="card-text mt-3 text-muted" >
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
               when an unknown printer took a galley of type and scrambled it to make a type specimen book.
               It has survived not only five centuries, but also the leap into electronic typesetting, 
               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
               sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
               like Aldus PageMaker including versions of Lorem Ipsum.
               </p>
               <p class="card-text">
                  <small class="text-muted">
                     <span class="">Autor:</span> Karol Poplewski
                  </small>
               </p>
               <a href="#" class="btn btn-dark">Czytaj więcej</a><br><br>
            </div>
         </div>

         <div class="card border-0 col-md-6 col-lg-4 bg-transparent text-center" >
            <img src="../../Images/siteimages/rapstacja.jpg" alt="Rap Stacja"  class="blog" style="height:234px; object-fit: cover; object-position: 100% 20%;">
            <div class="card body px-0 border-0">
               <h4 class="card-title">
               <br>Lorem Ipsum is simply dummy text
               </h4>
               <p class="card-text mt-3 text-muted" >
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
               Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
               when an unknown printer took a galley of type and scrambled it to make a type specimen book.
               It has survived not only five centuries, but also the leap into electronic typesetting, 
               remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
               sheets containing Lorem Ipsum passages, and more recently with desktop publishing software 
               like Aldus PageMaker including versions of Lorem Ipsum.
               </p>
               <p class="card-text">
                  <small class="text-muted">
                     <span class="">Autor:</span> Karol Poplewski
                  </small>
               </p>
               <a href="#" class="btn btn-dark">Czytaj więcej</a><br><br>
            </div>
         </div>
      </div>
   </div>
</section>

<section  class="vh-100" style="          padding-top:400px;
                                          background-image:url(../../Images/siteimages/zobaczsklep1.jpg);background-attachment:
                                          fixed;background-position: center;background-repeat: no-repeat; ">
   <div class="container">
      <div class="text-center">
         <h1 class="text-capitalize text-white text-center">odwiedź nasz sklep<br>aby kupić muzykę<br> ulubionego artysty!</h1><br>
      </div>
   </div>
</section>


    <script src="../js/jquery-3.6.4.js"></script>
    <script src="../../bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
