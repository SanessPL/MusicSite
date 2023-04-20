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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
   


.form-group {
  width: 100%;
  margin-top: 20px;
  font-size: 20px;
}
.form-group input,
.form-group textarea {
  width: 100%;
  padding: 5px;
  font-size: 18px;
  border: 1px solid rgba(128, 128, 128, 0.199);
  margin-top: 5px;
}

textarea {
  resize: vertical;
}
button[type="submit"] {
  width: 100%;
  border: none;
  outline: none;
  padding: 20px;
  font-size: 24px;
  border-radius: 8px;
  font-family: 'Poppins';
  color: white;
  text-align: center;
  cursor: pointer;
  margin-top: 10px;
  transition: 0.3s ease;
  background-color: #d9534f;
}
button[type="submit"]:hover {
  background-color: black;
}
#status {
  width: 90%;
  max-width: 500px;
  text-align: center;
  padding: 10px;
  margin: 0 auto;
  border-radius: 8px;
}
#status.success {
  background-color: rgb(211, 250, 153);
  animation: status 4s ease forwards;
}
#status.error {
  background-color: rgb(250, 129, 92);
  color: white;
  animation: status 4s ease forwards;
}
@keyframes status {
  0% {
    opacity: 1;
    pointer-events: all;
  }
  90% {
    opacity: 1;
    pointer-events: all;
  }
  100% {
    opacity: 0;
    pointer-events: none;
  }
}

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
     <a href="../php/concact.php" class="nav-link active">
        Kontakt
     </a>
    </li>
    <li class="nav-item active text-center fs-3 p-3">
     <a href="../php/login.php" class="nav-link">
        Zaloguj
     </a>
    </li>
    <li class="nav-item active text-center fs-3 p-3">
     <a href="../php/cart.php" class="nav-link">
        Koszyk
     </a>
    </li>
    </ul>
</div>
</div>
</nav>

<header id="header" class="vh-100" style="padding-top:450px; 
                                          background-image:url(../../Images/siteimages/concact.jpg);background-attachment:
                                          fixed;background-position: center;background-repeat: no-repeat; ">
   <div class="container">
      <div class="">
         <h1 class="text-capitalize text-white text-center">Skontaktuj się z <br> nami!</h1>
         </div>
   </div>
</header>
<section>
  <div class="container">
    <form action="https://formspree.io/mbjzbwaj" method="POST" id="my-form">

      <div class="form-group">
        <label for="firstName">Imię</label>
        <input type="text" id="firstName" name="firstName">
      </div>

      <div class="form-group">
        <label for="latsName">Nazwisko</label>
        <input type="text" id="lastName" name="lastName">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
      </div>

      <div class="form-group">
        <label for="massage">Wiadomość</label>
        <textarea name="massage" id="massage" cols="30" rows="10"></textarea>
      </div>

      <button type="submit">Wyślij!</button>
    </form>
  </div>

  <div id="status"></div>
  
</section>
</header>
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
      window.addEventListener("DOMContentLoaded", function () {
  // get the form elements defined in your form HTML above

  var form = document.getElementById("my-form");
  // var button = document.getElementById("my-form-button");
  var status = document.getElementById("status");

  // Success and Error functions for after the form is submitted

  function success() {
    form.reset();
    status.classList.add("success");
    status.innerHTML = "Dziękujemy!";
  }

  function error() {
    status.classList.add("error");
    status.innerHTML = "Wiadomość nie została poprawnie wysłana!";
  }

  // handle the form submission event

  form.addEventListener("submit", function (ev) {
    ev.preventDefault();
    var data = new FormData(form);
    ajax(form.method, form.action, data, success, error);
  });
});

// helper function for sending an AJAX request

function ajax(method, url, data, success, error) {
  var xhr = new XMLHttpRequest();
  xhr.open(method, url);
  xhr.setRequestHeader("Accept", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState !== XMLHttpRequest.DONE) return;
    if (xhr.status === 200) {
      success(xhr.response, xhr.responseType);
    } else {
      error(xhr.status, xhr.response, xhr.responseType);
    }
  };
  xhr.send(data);
}

   </script>
</body>
</html>
