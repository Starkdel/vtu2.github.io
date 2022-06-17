<?php
include 'connection.php';
session_start();

if(isset($_POST['login'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['psw']);

  $sql = "SELECT * FROM form WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($conn, $sql);
  if ($result -> num_rows > 0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username']= $row['username'];
    header('Location:dashboard.php');
}else {
echo "<script>alert('users details are wrong ')</script>";
}

 }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/register.css">
    </head>
    <body>
       
        <div class="w3-display-middle w3-white" style="border-radius: 4px;">
            <div class="w3-center w3-xlarge w3-text-red">STARK<strong class="w3-text-blue">DATA</strong></div>
            <div class="w3-center w3-large">Login into your account</div>
        <div class="w3-center"><br>
            <img src="./img/avatar (1).png" alt="Avatar" style="width:20%" class="w3-circle w3-margin-top">
          </div>
    
          <form class="w3-container" action="" method="post">
            <div class="w3-section ">
              <label><b>Username</b></label>
            <div class="input-icons">
                <i class="fa fa-user icon">
                </i>
              <input class="input-fields w3-input w3-border w3-margin-bottom" style ="width:100%; padding-left:40px;" type="text" placeholder="Enter Username" name="username" required></div>
              <label><b>Password</b></label>
              <div class="input-icons">
                <i class="fa fa-lock icon">
                </i>
                <input class="input-fields w3-input w3-border" type="password" style="width:100%; padding-left:40px; " placeholder="Enter Password" name="psw" required></div>
              <input class="w3-check w3-margin-left w3-margin-top"  type="checkbox" checked="checked"> Remember me
              <button class="w3-button  w3-block w3-blue w3-section w3-padding w3-hover-red" style="width:100%;"  name= "login" type="submit">Login</button>
              
            </div>
          </form>
    
          <div class="w3-container">
            <p class=" w3-center ">Forgot <a class="w3-text-blue w3-hover-text-red"  style="text-decoration: none;" href="#">password?</a></p>
          </div>
          <div class="w3-container">
            <p class=" w3-center ">Click here to <a class="w3-text-blue w3-hover-text-red"  style="text-decoration: none;" href="register.php">register?</a></p>
          </div>
    
        </div>
      </div>
    </div>
    </div>
    </div>
    </body>
</html>