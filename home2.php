<?php
//echo "<h1>Welcome";
session_start();

$login_session=$_SESSION['login_user'];
//echo $login_session;?></h1>

<?php
if($login_session == null){
//if (!$_SESSION['login_user']) { 
	

	header("location:login.html");

}
?>

<?php 
/*session_start();

$login_session=$_SESSION['login_user'];
echo $login_session;?></h1>
<a href="logout2.php"> Logout </a>*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">

  #ab{
  //width:70%;
  float:right;
  //font-size: 75px; 
  font-family:verdana;
  font-size: 80px;
  //text-align: left;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 922px) {
  .prev, .next,.text {font-size: 10px}
  #ab{
    //text-align: center;
    font-size: 55px;
  }
  #header{
    width: 104%;
  }
 
}
@media only screen and (max-width: 768px) {
  .prev, .next,.text {font-size: 10px}
  #ab{
    //text-align: center;
    font-size: 55px;
  }
  #header{
    width: 104%;
  }
 
}
@media screen and (max-width: 450px) {

 h1
{
  font-size: 30px;
} 
#ab{
  //text-align: center;
  font-size: 38px;
  float: left;
  margin: 50px 20px 50px;
}
.logo{
  height: 100px;
  width: 70px;
  font-size: 0px;
}
#header{
    width: 108.5%;
  }
}
@media screen and (max-width: 375px) {

 h1
{
  font-size: 30px;
} 
#ab{
  //text-align: center;
  font-size: 32px;
  float: left;
  margin: 50px 20px 50px;
}
.logo{
  height: 100px;
  width: 70px;
  font-size: 0px;
}
#header{
    width: 109%;
  }
}
.header{
  height: 80px;
}
@media only screen and (max-width: 360px) {
  .prev, .next,.text {font-size: 10px}
  #ab{
  //text-align: center;
  font-size: 30px;
  float: left;
  margin: 50px 20px 50px;
}
.logo{
  height: 100px;
  width: 70px;
  font-size: 0px;
}
#header{
    width: 110%;
  }
}
@media only screen and (max-width: 320px) {
  .prev, .next,.text {font-size: 10px}
  #ab{
  //text-align: center;
  font-size: 25px;
  float: left;
  margin: 50px 20px 50px;
}
.logo{
  height: 100px;
  width: 70px;
  font-size: 0px;
}
#header{
    width: 111%;
  }
}

}



.button {
    background-color: white; 
    border: none;
    color: white;
    padding: 0px 0px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px 0px;
    cursor: pointer;
    height: 60px;
}
body{
     background-image: url("download (7)");
    background-color: lightblue;
    background-image:url("images (5).jpg");
 //margin: -100px 0 0 200px;
     
}
/*img {
    display: block;
    margin:  auto;
   
    height:700px;
}*/

.city {
   float: left;
   margin: 10px;
   padding: 10px;
   max-width: 300px;
   height: 300px;
   border: 1px solid black;
   background:yellow;
   text-decoration:none;
   overflow: scroll;

}  

.header {background: yellow;color:blue; padding: 5px; height:130px;margin: 0px 0px 0px -14px;
  //margin-left: 00px;
  //margin-right: 101px;
width: 102.5%;}
.logo{
  //width:30%;
  //float:left;
  text-decoration: none;
  font-size: 10px;
}
}

.sitename
{
  width:70%;
  float:right;
  font-size: 100px; 
  font-family:verdana;

}
.footer {
  /*background: white;color:black; overflow: none;
  height: 100px;
  width: 1250px;
  position: absolute;
  clear:both;
  float: right;
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;*/

}
footer{
  background-color: white;
  height: 100px;
  //float:left;
  clear:left;
 // width:1200px;
}
/*.visit{
  background: #aaa;color:black; overflow: none; float: right;clear: both;
}*/

/** {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}*/
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1250px;
  max-height: 5000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .8} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.session{
  float :right;
  float-right :80px;
  color :white;
}        
 
}


</style>

<title>Worldcity.com-home2.php</title>
</head>

<body>
<div class="container">
 <div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
    <header class="header" id="header">
        <div><img class="img-responsive logo" src="images.jpg" height="80px;" width="120px;">ESTD.2017</img></div>
       <div id="ab" class="text" style="color: blue;">WorldCity.com</div>
    </header>
    </div>
  </div>
 </div>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>                       
      </button>

      <a class="navbar-brand" href="#">Menu</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
     <li class="active"><a href="rjcss.html">Home</a></li>
     <div class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" id="dropbtn">News2</a>
        <ul class="dropdown-menu" id="dropdown-content">
          <a href="#">HINDI</a>
          <a href="#">ENGLISH</a>
          <a href="#">MARATHI</a>
    </div>
    </li>
     <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
     </li>
     <li><a href="https://timesofindia.indiatimes.com">News</a></li>
     <li><a href="contact.html">Contact</a></li>
     <li><a href="about.html">About Us</a></li>
     <li><a href="https://www.tcs.com ">Grab opportunity with TCS</a></li>
   </ul>
   <ul class="nav navbar-nav navbar-right">
        <div class="session">
        <li><?php echo "<h3>Welcome"." ";echo $login_session;?></h3></li>
        </div>
        
        <li><a href="logout2.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>

      </ul>
    </div>
  </div>
 </nav>

 <div class="container-fluid">
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="The Lovely Natural Beauty of Kallam Swat River, Pakistan.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="567d1a1cc9595.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="13-Shingrai-Waterfall.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<h2 style=color:white>Explore your destination with us!</h2>

 <div class="col-sm-12">
  <div class="col-sm-6 city" >
    <a href="https://london.org"><img src="download (5).jpg" height="80%" width="100%"></img></a>
    <button type="button" class="button"><a href="https://www.wikipedia.com" style="text-decoration:none;"><h2>LONDON</h2></button>
    <p id="demo"></p>
    <script>
    function myFunction() { 
    document.getElementById("demo").innerHTML = "<p>London is the capital of England.</p><p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>";
    }
    </script>
  </div>

  <div class="col-sm-6 city">
   <a href="https://paris.com"><img src="download.jpg" height="80%" width="100%"></img></a>
   <button type="button" class="button"><a href="https://www.wikipedia.com" style="text-decoration:none;"><h2>PARIS</h2></a></button>
   <p>Paris is the capital of France.</p> 
   <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
  </div>
 </div>

 <div class="col-sm-12">  
  <div class="col-sm-6 city">
   <a href="https://tokyo.com"><img src="tokyo.jpg" height="80%" width="100%"></img></a>
   <button type="button" class="button"><a href="https://www.wikipedia.com" style="text-decoration:none;"><h2>TOKYO</h2></a></button>
   <p>Tokyo is the capital of Japan.</p>
   <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
 </div>

  <div class="col-sm-6 city" >
   <a href="https://nyc.com"><img src="London_tcm233-2438088.jpg" height="80%" width="100%"></img></a>
   <button type="button" class="button"><a href="https://www.wikipedia.com" style="text-decoration:none;"><h2>NEW YORK</h2></a></button>
   <p>The City of New York is the most populous city in the United States.</p>
   <p>New York is an important center for international diplomacy and has been described as the cultural and financial capital of the world.</p>
  </div>
 </div>

 <div class="col-sm-12">
  <div class="col-sm-6 city">
   <a href="https://www.maharashtratourism.gov.in/destination/mumbai"><img src="download (4).jpg" height="80%" width="100%"></img></a>
   <button type="button" class="button"><a href="https://www.wikipedia.com" style="text-decoration:none;"><h2>MUMBAI</h2></a></button>
   <p>The City of New York is the most populous city in the United States.</p>
   <p>New York is an important center for international diplomacy and has been described as the cultural and financial capital of the world.</p>
  </div>
  
  <div class="col-sm-6 city">
   <a href="https://www.yatra.com/flights"><img src="31_1_boeing-777.jpg" height="80%" width="100%"></img></a>
   <a href="https://www.airasia.com/in/en/home.page" style="text-decoration:none;"><h2>Book Your Flight Tickets </h2></a>
   <p>The City of New York is the most populous city in the United States.</p>
   <p>New York is an important center for international diplomacy and has been described as the cultural and financial capital of the world.</p>
  </div>
 </div>


  <footer>
    Copyright &copy; WorldCity.com <br>

    visit also:<a href="https://IndianTourism.com">Indian Tourism</a><br><a href="https://irctc.in">Indian Railways</a><br><h4>This Website is Completely Authorised by Mr.ROSHAN JHA</h4>
  </footer>
    
  
 


 </div>

















































<?php
/*echo "<h1>Welcome";
session_start();

$login_session=$_SESSION['login_user'];
echo $login_session;?></h1>

<?php
if($login_session == null){
//if (!$_SESSION['login_user']) { 
	

	header("location:login2.php");

}
?>
<a href="logout2.php"> Logout </a>



 <?php 
/*session_start();

$login_session=$_SESSION['login_user'];
echo $login_session;?></h1>
<a href="logout2.php"> Logout </a>*/
?>

</body>
</html>
