<?php
session_start();
/*if(count($_POST)>0) {
//if( $_POST["user_name"] == "admin" and $_POST["password"] == "admin") {
  $_SESSION["user_id"] = $row["USER_ID"];
  $_SESSION["user_name"] = $row["USERNAME"];
  $_SESSION['loggedin_time'] = time();  
} else {
 // $message = "Invalid Username or Password!";
}

*/
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="images.jpg" type="image/gif" sizes="16x16">
<title>Login-ROSHAN JHA</title>
<style>
/*.button {
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
}*/
.bd{
     background-image: url("D:\images (2).jpg");
    background-color: lightblue;
    background-image:url("images (5).jpg");

     
}
/*img {
    display: block;
    margin:  auto;
   
    height:700px;
}*/

/*.city {
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

 .inline { 
    display: inline; 
    border: 1px solid red; 
    margin:10px;
    }*/

.header {background: yellow;color:blue; padding: 5px; height:120px;}
.logo{
  width:30%;
  float:left;
}
.sitename
{
  width:70%;
  float:right;
  font-size: 100px; 
  font-family:verdana;

}
.footer {background: white;color:black; overflow: none; float: right;clear: both;
  height: 100px;
  width: 1250px;
  vertical-align: bottom;
   //position: absolute;
   position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  //text-align: center;

}
/*.visit{
  background: #aaa;color:black; overflow: none; float: right;clear: both;
}*/
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    width: 1250px;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
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

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>


<?php


// define variables and set to empty values
$userErr = $username2Err = $password2Err="";
$user = $username2 = $password2 ="";

echo "start 1";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["user"])) {
    $userErr = "Name is required";
  } else {
    $user = test_input($_POST["user"]);
    
  }
  
  
  
  
  if (empty($_POST["username2"])) {
    $username2Err = "Username is required";
  } else {
    $username2 = test_input($_POST["username2"]);
    }
  

  if (empty($_POST["password2"])) {
    $password2Err = "Password is required";
  } else {
    $password2 = test_input($_POST["password2"]);
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
echo $user;
echo "<br>";
echo $username2;
echo "<br>";
echo $password2; 

echo "Stored data";
$us = $username2;
$pa = $password2;
echo $us;echo $pa;
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

$sql = "SELECT * FROM `login` where USER_ID='$user'";
$result = $conn->query($sql);

if ($conn->multi_query($sql) === TRUE) {
    echo "<br><h3>New records created successfully</h3>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//select data
echo "<h1>List of Enrolled People</h1>";
if ($result->num_rows > 0) {
    // output data of each row
  echo "<table><tr><th>ID</th><th>USERNAME</th><th>PASSWORD</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["USER_ID"]. "</td><td>" . $row["USERNAME"]. "</td><td>" . $row["PASSWORD"]. "</td></tr>";
        $use = $row["USERNAME"];
        echo "username is:".$use;
        $pass = $row["PASSWORD"];
        echo "pass is:".$pass;

    }
    echo "</table>";
    
} 

//session_start();
/*if(count($_POST)>0) {
//if( $_POST["user_name"] == "admin" and $_POST["password"] == "admin") {
  $_SESSION["user_id"] = $row["USER_ID"];
  $_SESSION["user_name"] = $row["USERNAME"];
  $_SESSION['loggedin_time'] = time();  
} else {
 // $message = "Invalid Username or Password!";
}*/




//if(isset($_SESSION["user_id"])) {
//header("Location:home.html");
$_SESSION["user_id"] = $row["USER_ID"];
if(($us === $use) && ($pa === $pass)){
  //header("location: home.html") ;
  if(count($_POST)>0) {
//if( $_POST["user_name"] == "admin" and $_POST["password"] == "admin") {
  $_SESSION["user_id"] = $row["USER_ID"];
  $_SESSION["user_name"] = $row["USERNAME"];
  $_SESSION['loggedin_time'] = time();  
  header("location: home.html") ;
} else {
 // $message = "Invalid Username or Password!";
}
  echo "yesss";
  exit;
}
  else {
     echo "user,pass is wrong";
   // header("location: login.html") ;
    //echo "user,pass is wrong";
   //header("location:login.php") ;
    //echo "login failed";
    exit;
    
}
//}


/*$sql1 = "SELECT * FROM `registration`";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
  echo "<table><tr><th>ID</th><th>NAME</th><th>EMAIL</th><th>GENDER</th><th>COMMENT</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"]. "</td><td>" . $row["NAME"]. "</td><td>" . $row["EMAIL"]. "</td><td>" . $row["GENDER"]. "</td><td>" . $row["COMMENT"]. "</td></tr>";
    }
    echo "</table>";
    
} else {
    echo "0 results";
}*/
$conn->close();
?>

<?php
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cityworld.com";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//select data
echo "<h1>List of Enrolled People</h1>";
$sql1 = "SELECT 'USERNAME', 'PASSWORD' FROM 'login' WHERE USER_ID='$user'";
if ($conn->multi_query($sql1) === TRUE) {
    echo "<br><h3>New records created successfully</h3>";
} //else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
//}
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
  echo "yes connected";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        echo "fetched value";
        $use =  $row["USERNAME"];
        $pass =  $row["PASSWORD"];
    }
   
echo "fetched value is".$use; 
 echo "fetched value is".$pass; 
 if (($us == $use) && ($pa == $pass)) {
   header("location:home.html");
   exit;
    }  
    else {
    echo "0 results,USERNAME or Password is wrng";
    //header("location:login.html");
   // exit;

}  
} 

//else {
    //echo "0 results,USERNAME or Password is wrng";
    //header("location:login.html");
   // exit;

//}
$conn->close();*/
?>






</body>
</html>