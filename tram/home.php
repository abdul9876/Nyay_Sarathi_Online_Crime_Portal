<!DOCTYPE html>
<html>
<head>
    
	<title>NYAY SARATHI</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" type="text/css" href="slide_show.css">
  
  <style>

body {
     background-size: cover;
     background-color: black;
     background-position: center;
      padding-left: 180px; 
     
}
.navbar-default {
  color:#f8f8f8;
    background-color: black;
    border-color: #e7e7e7;
}
.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
    color: #777;
    background-color: black;
    
}
html {
    width: 100%;
    height: 100%;
    font-family: "Lato";
    color: white;
    background-size:cover;
    margin-top:-10px;
    background:fixed;
}
.img{
  height : -10px;
}
h1 {
  font-weight: 700;
  font-size: 5em;
}


.content{             
  padding-right: 0%;
  text-align: center;
  padding-bottom:100%;
 
 
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
                 0px 8px 13px rgba(0,0,0,0.1),
                 0px 18px 23px rgba(0,0,0,0.1);
}

hr {
    width: 250px;
    border-top: #f8f8f8;
    border-bottom: 1px solid rgba(0,0,0,0.2);
}
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin-top: 145px;
}
.slide_show{
margin-left:-280px;
}
nav.navbar.navbar-default.navbar.fixed-top{
background-color: black;
}
.container{
  background-color: black;
}
.mySlides{
  margin-top: -10px;
}
a {
    color: white;
    text-decoration: none;
}

.strong {
    font-weight: 700;

}
.crime-portal{
  padding-left: 90px;
}

.navbar-brand{
  margin-top: -80px;
  margin-left: 100px;
}

.fa-user{
  margin-bottom: -430px;
  margin-right: 100px;
}
.navbar-nav{
  margin-top: -80px;
  margin-left: 250PX;
}
.slide_show{
  margin-bottom: -30px;
}
.active{
  margin-left: 20px;
}



</style>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="Home.JPG" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="About_Us.JPG" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="Contact_Us.JPG" style="width:100%">
  
</div>
</div>
<div class="slide_show">
  <div class="numbertext">
  <img src="Testimonials.JPG" style="width:88.4%">
  </div>
</div>

<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  } 
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>

</head>
    
<body>

 <nav class="navbar navbar-default navbar-fixed-top">

  <div class = logo>
    <img src = "crimelogo.JPG" >
  </div>
        
          

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"> <b>NYAY SARATHI</b></a>
        
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="userlogin.php">User Login  <i class="fa fa-user"></i></a></li>
        <li><a href="official_login.php">Official Login  <i class="fa fa-user"></i></a></li>
        <li> <a href="registration.php">signup <i class ="fa fa-user"></i></a></li>
        <div class = "head">
      </ul>
    </div>
  </div>
  <marquee width="100%" direction="right">
PLEASE ENSURE THAT YOU ARE REGISTERING A TRUE COMPLAIN AND WE ENSURE THE ANONYMITY OF A PERSON.
</marquee>
</div>
 </nav>

 
 
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
</body>
</html>