<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AstonCV</title>
    <link rel="stylesheet" href="astoncv.css" />
    </head>
    <body style="background-color:black;">
        <!-- Navigation bar Section -->
    <nav class="navbar">
        <div class="container">
          <a href="#home" id="logo">AstonCV</a>
          <ul class="menu">
            <li class="item">
              <a href="#home" class="links" id="home-page">Home</a>
            </li>
   
            <li class="btn">
              <a href="#log-in" class="button" id="login">Log In</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Text Section -->
    <div class="Text" id="home">
        <div class="text__container">
          <h1 class="text__heading">View <span>CVs</span></h1>
        </div>
      </div>

      <!-- Login Section -->
    <div class="main" id="log-in">
        <div class="main__container">
            <div class="main__img--card"><i class="fas fa-layer-group"></i></div>
        </div>
      </div>

     <form method="$_POST" action"#">  
        <div class="login__container">   
            <label>Name : </label>   
            <input type="text" placeholder="Enter Name" name="name" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required>  
            <input type="submit" name="submit" value="Log In">
        </div>   
    </form>  
    <br>   
     <a href="astonregistration.php">Registration</a>
    </body>
</html>

<?php

require 'astoncvcon.php';

//if(!empty($_SESSION["id"])){
   // header("Location: astoncv2.html");
 // }

$astoncv = new astoncv();

if(isset($_POST["submit"])){
  $result = $astoncv->astoncv($_POST["name"], $_POST["password"]);

  if($result == 1){
    $_SESSION["astoncv"] = true;
   // $_SESSION["id"] = $astoncv->idUser();
    header("Location: astoncv2.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Incorrect password'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('User is Not Registered'); </script>";
  }
}

