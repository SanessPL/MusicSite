<?php 
session_start(); 
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != true){
   // Użytkownik jest zalogowany
   // Można wczytywać inną stronę po zalogowaniu
   header("Location: index.php"); // Przykładowe przekierowanie na inną stronę po zalogowaniu
   exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../../Images/logo/favicon.png">
>
    <link rel="stylesheet" href = "../../bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Muzycznie</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body{
    background: white;
}
.box{
    background: #fdfdfd;
    display: flex;
    flex-direction: column;
    padding: 25px 25px;
    border-radius: 20px;
    box-shadow: 0 0 128px 0 rgba(0,0,0,0.1),
                0 32px 64px -48px rgba(0,0,0,0.5);
}
.form-box{
    width: 450px;
    margin: 0px 10px;
}
.form-box header{
    font-size: 25px;
    font-weight: 600;
    padding-bottom: 10px;
    border-bottom: 1px solid #e6e6e6;
    margin-bottom: 10px;
}
.form-box form .field{
    display: flex;
    margin-bottom: 10px;
    flex-direction: column;

}
.form-box form .input input{
    height: 40px;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}
.btn{
    height: 35px;
    background: black;
    border: 0;
    border-radius: 5px;
    color: #fff;
    font-size: 15px;
    cursor: pointer;
    transition: all .3s;
    margin-top: 10px;
    padding: 0px 10px;
}
.btn:hover{
    opacity: 0.82;
}
.submit{
    width: 100%;
}
.links{
    margin-bottom: 15px;
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
     <a href="../php/index.php" class="nav-link ">
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
     <a href="../php/contact.php" class="nav-link">
        Kontakt
     </a>
    </li>
    <li class="nav-item active text-center fs-3 p-3">
     <a href="../php/login.php" class="nav-link active">
        Zaloguj
     </a>
    </li>
    <li class="nav-item active text-center fs-3 p-3">
     <a href="../php/shopcartnot.php" class="nav-link">
        Koszyk
     </a>
    </li>
    </ul>
</div>
</div>
</nav>




      <div class="container" style=
        " display: flex;
           align-items: center;
         justify-content: center;
         min-height: 90vh;">
        <div class="box form-box">

        <?php 
         
         include("connect.php");
         if(isset($_POST['submit'])){
             $username = $_POST['username'];
             $email = $_POST['email'];
             $password = $_POST['password'];
         

             $hashed_password = password_hash($password, PASSWORD_DEFAULT);

         
             $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");
         
             if(mysqli_num_rows($verify_query) !=0 ){
                 echo "<div class='message'>
                           <p>Istnieje konto z podanym emailem!</p>
                       </div> <br>";
                 echo "<a href='javascript:self.history.back()'><button class='btn'>Powrót</button>";
             }
             else{
         
                 mysqli_query($con,"INSERT INTO users(Username,Email,Password) VALUES('$username','$email','$hashed_password')") or die("Error Occurred");
         
                 echo "<div class='message'>
                           <p>Rejestracja przebiegła pomyślnie!</p>
                       </div> <br>";
                 echo "<a href='login.php'><button class='btn'>Zaloguj się</button>";
             }
         }else{
         ?>

            <header>Zarejestruj się!</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Zarejestruj się" required>
                </div>
                <div class="links">
                    Masz już konto? <a href="login.php">Zaloguj się.</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>