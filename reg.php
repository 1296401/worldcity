<!DOCTYPE html>
<html>
<head>
 

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
 
 <style type="text/css">
    table, th, td {
    border: 1px solid black;
} 
 
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
#footer {
  position: absolute;
  bottom: 0;
  width: 89%;
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

 
}





  </style>
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
     <li class="active"><a href="#">Home</a></li>
     <li><a href="http://localhost:8080/tutorial/login.html">Login</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost:8080/tutorial/login.html"><span class="glyphicon glyphicon-user"></span> Login</a></li>
     
      </ul>
    </div>
  </div>
 </nav>

<?php
// define variables and set to empty values
$nameErr = $email1Err = $ageErr = $username1Err = $password1Err="";
$name = $email1 = $age = $username1 = $password1 ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email1"])) {
    $email1Err = "Email is required";
  } else {
    $email1 = test_input($_POST["email1"]);
    // check if e-mail address is well-formed
    if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
      $email1Err = "Invalid email format"; 
    }
  }

  if (empty($_POST["age"])) {
    $ageErr = "Name is required";
  } else {
    $age = test_input($_POST["age"]);
  }
  
  
  if (empty($_POST["username1"])) {
    $username1Err = "Username is required";
  } else {
    $username1 = test_input($_POST["username1"]);
    }
  

  if (empty($_POST["password1"])) {
    $password1Err = "Username is required";
  } else {
    $password1 = test_input($_POST["password1"]);
    }
  }
  
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>



<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email1;
echo "<br>";
echo $age;
echo "<br>";
echo $username1;
echo "<br>";
echo $password1;
echo "<br>";
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cityworld.com";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `login`(`NAME`, `AGE`, `EMAIL`, `USERNAME`, `PASSWORD`) VALUES ('$name','$age','$email1','$username1','$password1')";

if ($conn->multi_query($sql) === TRUE) {
echo "<h1>YOUR INFORMATION</h1>";
$sql1 = "SELECT * FROM `login`";
$result = $conn->query($sql1);
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo " <h1>". "Your ID : " . $last_id."</h1>";
    echo " <h1>". "Your Username : " . $username1. "</h1>" ;
}
    echo "<h2>"."Note <br>";
    echo "<h4>"."Keep Your ID and Username for Further reference.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
/*select data
echo "<h1>YOUR INFORMATION</h1>";
$sql1 = "SELECT * FROM `login`";
$result = $conn->query($sql1);
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully.<br> <strong>Last inserted ID is:</strong> " . $last_id."<br>";
    echo " <strong>Last inserted Username is:</strong> " . $username1;
}*/
/*if ($result->num_rows > 0) {
    // output data of each row
  echo "<table><tr><th>USER ID</th><th>NAME</th><th>EMAIL</th><th>USERNAME</th><th>PASSWORD</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["USER_ID"]. "</td><td>" . $row["NAME"]. "</td><td>" . $row["EMAIL"]. "</td><td>" . $row["USERNAME"]. "</td><td>" . $row["PASSWORD"]. "</td></tr>";
    }
    echo "</table>";
    
} else {
    echo "0 results";
}*/
$conn->close();
?>

<form action="php.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>



<div class="container-fluid">

<footer id="footer">
    Copyright &copy; WorldCity.com <br>

    visit also:<a href="http://IndianTourism.com">Indian Tourism</a><br><a href="http://irctc.in">Indian Railways</a><br><h4>This Website is Completely Authorised by Mr.ROSHAN JHA</h4>
 </footer>

</div>



</div>


</body>
</html>