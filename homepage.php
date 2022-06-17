<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/home.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
  
  body, html {
    height: 100%;
    line-height: 1.8;
    overflow-x: hidden;
  }
  #myNavbar{
    position: fixed;
  }
  
  /* Full height image header */
  .bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("./img/pic\ 1.jpg");
    min-height: 100%;
  }

  #mySidebar{
 z-index: 10;

  }
  
  .w3-bar .w3-button {
    padding: 10px;
  }
  .mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
  </style>
</head>
<body>
  <div class="w3-top">
    <div class="w3-bar w3-blue w3-card" id="myNavbar">
      <a class="w3-bar-item w3-button w3-wide w3-white w3-text-red">STARK<strong class="w3-text-blue">DATA</strong></a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-medium w3-hide-small">
        <a href="#about" class="w3-bar-item w3-button">Home</a>
        <a href="#team" class="w3-bar-item w3-button"></i>About</a>
        <a href="#work" class="w3-bar-item w3-button"></i>Pricing </a>
        <a href="#pricing" class="w3-bar-item w3-button"></i>Features</a>
      
      
        <a href="register.php" class="w3-bar-item w3-button">Registration</i></a>
        <a href="login.php" class="w3-bar-item w3-button">Login</i></a>
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->
  
      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large" onclick="w3_open()">
        <i style="color: black;"class="fa fa-bars"></i>
      </a>
    </div>
  </div>

  <!--side bar-->
  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left  w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
    <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">Pricing</a>
    <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">Features</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">Register</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">Login</a>
  </nav>
  
  <!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo  w3-text-red">STARK <strong class="w3-text-blue">DATA</strong></span><br>

    <span class="w3-xxlarge"><strong>WELCOME  TO  STARK  DATA</strong></span>
    <p class="w3-large">One of Nigerian's largest VTU business platform. We provide mobile data, </p>
    <p class="w3-large">Airtime of various networks, Bill payments,Cable subscribtions and all other </p>
    <p class="w3-large"> Services at affordable prices </p>
    <p ><span><a href="login.php" class="w3-button  w3-red w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Login</a></span>
      <span><a href="register.php" class="w3-button w3-red w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Register</a></span></p>
    
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!--services-->
<h7 style="text-align: center; font-weight:bold;font-size:x-large;">Our Services</h7>
<div class="fab">

<div class="fab_left"> 
<div class="des">
  <img src="../VTU_2/img/bulk_sms.png" width="100%">
  <h3>Bulk Sms</h3>
  <p></p>
  <p></p>
</div>
<div class="des">
  <img src="../VTU_2/img/bulk_sms.png" width="100%">
  <h3>Bulk Sms</h3>
  <p></p>
  <p></p>
</div>
<div class="des">
  <img src="../VTU_2/img/bulk_sms.png" width="100%">
  <h3>Bulk Sms</h3>
  <p></p>
  <p></p>
</div>
<div class="des">
  <img src="../VTU_2/img/bulk_sms.png" width="100%">
  <h3>Bulk Sms</h3>
  <p></p>
  <p></p>
</div>
<div class="des">
  <img src="../VTU_2/img/bulk_sms.png" width="100%">
  <h3>Bulk Sms</h3>
  <p></p>
  <p></p>
</div>
<div class="des">
  <img src="../VTU_2/img/bulk_sms.png" width="100%">
  <h3>Bulk Sms</h3>
  <p></p>
  <p></p>
</div>
</div>
<div class="fab_right">

<img src="../VTU_2/img/GalaxyS22+-PhantomWhite-Front.jpg" width="100%">
</div>
</div>

<div class="fad">
  <div class="fad_left">
    <img src="../VTU_2/img/GalaxyS22+-PhantomWhite-Front.jpg" width="150%" > 
  </div>



  <div class="fad_right" style="font-weight: bold;"><br>
    <h4>STARK DATA would attend to all your needs</h4>
    <p>All you need to is to follow this steps</p>
    <br>
    <p> <i class="fa fa-check-circle" aria-hidden="true"></i> Create an account on our website, just 
    click on the register button <i class="fa fa-hand-o-up" aria-hidden="true"></i></p>
    <p> <i class="fa fa-check-circle" aria-hidden="true"></i> Login into your created account</p>
      <p> <i class="fa fa-check-circle" aria-hidden="true"></i> Fund your wallet </p>
        <p>  <i class="fa fa-check-circle" aria-hidden="true"></i>Click on any of the services above.Note it's avaliable on the dashboard</p>
        <br>
        <p>Start a business with STARK DATA and earn up to 100k monthly</p>
        <br>
        <button onclick="press()" id="click">Let's get Started</button>
          
  </div>
</div>
<!--Slideshow-->
<div>
  <h6 style="text-align: center; font-weight:bold;font-size:x-large;">APP SCREENSHOTS</h6>
</div>


<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" src="../VTU_2/img/GalaxyS22+-PhantomWhite-Front.jpg" style="width:100%">
  <img class="mySlides" src="../VTU_2/img/GalaxyS22+-PhantomWhite-Front.jpg" style="width:100%">
  <img class="mySlides" src="../VTU_2/img/GalaxyS22+-PhantomWhite-Front.jpg" style="width:100%">
  <img class="mySlides" src="../VTU_2/img/GalaxyS22+-PhantomWhite-Front.jpg" style="width:100%">
  <img class="mySlides" src="../VTU_2/img/GalaxyS22+-PhantomWhite-Front.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki w3-text-blue" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki w3-text-blue" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-blue" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-blue" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-blue" onclick="currentDiv(3)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-blue" onclick="currentDiv(4)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-blue" onclick="currentDiv(5)"></span>
  
  </div>
</div>

<!--work-->




<section id="process" class="work-process-section position-relative  ptb-100 gray-light-bg">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-9 col-lg-8">
              <div class="section-heading text-center mb-5">
                  <h2>Our Work Process</h2>
                  <p>
                    Easy steps to use our software.
                  </p>
              </div>
          </div>
      </div>
      <div class="row align-items-center justify-content-md-center justify-content-sm-center">
          <div class="col-md-12 col-lg-6">
              <div class="work-process-wrap">
                  <div class="process-single-item">
                      <div class="process-icon-item left-shape">
                          <div class="d-flex align-items-center">
                              <div style="font-size:100px ;" class="process-icon mr-4">
                                  <i class="fa fa-user-secret"></i>
                              </div>
                              <div class="process-content text-left">
                                    <h6 style="color:red;"> STEP 1 </h6>
         <br>
         <h4 class="box-title">
          <b>Create account</b>
                  </h4>

          <p style="font-weight:bold ;">
      Create an acount with few clicks within few minutes.            </p>               
      </div>
                          </div>
                          <svg x="0px" y="0px" width="312px" height="130px">
                              <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338"></path>
                              <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M3.121,2.028 C3.121,2.028 1.003,124.928 99.352,81.226 C99.352,81.226 272.319,21.200 310.000,127.338 "></path>
                          </svg>
                      </div>
                  </div>
                  <div class="process-single-item">
                      <div class="process-icon-item right-shape">
                          <div class="d-flex align-items-center">
                              <div style="font-size:100px ;" class="process-icon ml-4">
                                  <i class="fa fa-puzzle-piece "></i>
                              </div>
                              <div class="process-content text-right">
                                   <h6 style="color:red;"> STEP 2 </h6>
         <br>
         <h4 class="box-title">
         Fund Your Wallet
                  </h4>

          <p class="description" style="font-weight:bold ;">
      Fund your wallet with any amount you wish to buy our services.             </p>
                                                                          </div>
                          </div>
                          <svg x="0px" y="0px" width="312px" height="130px">
                              <path class="dashed1" fill="none" stroke="rgb(95, 93, 93)" stroke-width="1" stroke-dasharray="1300" stroke-dashoffset="0" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"></path>
                              <path class="dashed2" fill="none" stroke="#ffffff" stroke-width="2" stroke-dasharray="6" stroke-dashoffset="1300" d="M311.000,0.997 C311.000,0.997 313.123,123.592 214.535,79.996 C214.535,79.996 41.149,20.122 3.377,125.996"></path>
                          </svg>
                      </div>
                  </div>
                  <div class="process-single-item">
                      <div class="process-icon-item left-shape mb-0">
                          <div class="d-flex align-items-center">
                              <div style="font-size:100px ;"  class="process-icon mr-4">
                                  <i class="fa fa-car "></i>
                              </div>
                              <div class="process-content text-left">
                                  
           <h6 style="color:red;"> STEP 3 </h6>
         <br>
         <h4 class="box-title">
   Purchase
                  </h4>

          <p class="description" style="font-weight:bold ;">
      After funding your wallet then purchase which ever service you want to. You are good to go, repeat same process anytime.         </p>
                                  
                                  
                                                                          </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-6">
              <div class="img-wrap">
                  <img src="../VTU_2//img/images.jpg" alt="features" class="w3-circle " >
              </div>
          </div>
      </div>
  </div>
</section>
<br>
<div>
<h6 style="text-align: center; font-weight:bold;font-size:x-large;">PRICES</h6>
</div>
<!--prices-->
<section>
  <div class="part">
<div class="partone">
<img src="./img/GalaxyS22+-PhantomWhite-Front.jpg">
</div>
<div class="partone">
  <img src="./img/GalaxyS22+-PhantomWhite-Front.jpg">
</div>
<div class="partone">
  <img src="./img/GalaxyS22+-PhantomWhite-Front.jpg">
</div>
  </div>

</section>
<!--clients say-->

<div style="background-color: blue; color:white" class="w3-container w3-padding-64 w3-center" id="team">
  <h2>Our Clients description of our abilities</h2>
  <br>
  
  <div class="w3-row">
  
  <div class="w3-quarter">
    <img src="./img/images (4).jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Johnny Walker</h3>
    <p>Web Designer</p>
  </div>
  
  <div class="w3-quarter">
    <img src="./img/images (3).jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Rebecca Flex</h3>
    <p>Support</p>
  </div>
  
  <div class="w3-quarter">
    <img src="./img/download (1).jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Jan Ringo</h3>
    <p>Boss man</p>
  </div>
  
  <div class="w3-quarter">
    <img src="./img/download.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
    <h3>Kai Ringo</h3>
    <p>Fixer</p>
  </div>
  </div>
  </div>
<br><br>

<!--info-->
<section style=" font-size:large;   font-weight: bold; text-align:center;">
  <h7>FOR MORE INFORMATION</h7>
  <br>
  <p>Give us a call or send an email address to the email given below</p>
  <button id="select"> Get Direction -></button><br><br>
 
  <hr>
  <br>
  <p> <i class=" fa fa-location-arrow"></i>   Location </p>
  <p>Ibafo,Ogun state, Nigeria</p>  
  <p><i class=" fa fa-envelope-o"></i>   Email Address </p>
  <p>abc@gmail.com</p>
</section>

<div class="w3-center w3-padding-48">
  <a  href="#home" class="w3-button w3-yellow"><i class="fa fa-hand-o-up"></i>

</a>
</div>







<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-blue", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-blue";
}


var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}


</script>




</body>
</html>