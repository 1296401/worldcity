<?php
session_start();
?>
<?php
//include('login.php');
// Set session variables
//$_SESSION["user"] = $user;
//$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>
<!DOCTYPE html>
<html>
<head>
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

    table, th, td {
    border: 1px solid black;
}
  </style>
</head>
<body class="bd">

<?php
include('home2.php');
//echo "welcome".$row["USER_ID"];
// Set session variables
//$_SESSION["user"] = $user;
//$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

 
 <div class="header">
 <!--    <div class='logo'><img src="C:\Sublime Text 3\rj\images.jpg" height=105px; width=100px;><br> ESTD.2017</img></div> -->
 <div class='logo'><img src="images.jpg" height=105px; width=100px;><br> ESTD.2017</img></div>

   <div class='sitename'>WorldCity.com</div>
 </div>
 <div class="nav">
<ul>
  <li><a href="rjcss.html">Home</a></li>
  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">News2</a>
  <div class="dropdown-content">
      <a href="#">HINDI</a>
      <a href="#">ENGLISH</a>
      <a href="#">MARATHI</a>
    </div>
  </li>
  <li><a href="https://timesofindia.indiatimes.com">News</a></li>
  <li><a href="contact.html">Contact</a></li>
  <li><a href="about.html">About Us</a></li>
  <li><a href="https://www.tcs.com">Grab opportunity with TCS</a></li>
  <li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Find Other Jobs</a>
  <div class="dropdown-content">
      <a href="#">Manual Tester+Little Bit Developer</a>
      <a href="#">UI developer</a>
      <a href="#">Drupal Developer</a>
      <a href="http://localhost:8080/tutorial/a.php">Lern php</a>
    </div>
  <li><a href="logout.php">LOGOUT</a></li>
</ul>
 </div> 
 

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

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
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

/*function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/
?>

<h2>REGISTRATION FORM</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
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

$sql = "INSERT INTO `registration` (`NAME`, `EMAIL`, `WEBSITE`, `COMMENT`, `GENDER`) VALUES ('$name', '$email;', '$website', '$comment', '$gender')";

if ($conn->multi_query($sql) === TRUE) {
    echo "<br><h3>New records created successfully</h3>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//select data
echo "<h1>List of Enrolled People</h1>";
$sql1 = "SELECT * FROM `registration`";
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
}
$conn->close();
?>
<?php
// define variables and set to empty values
$idErr=$nameErr = $emailErr = $genderErr = $websiteErr = "";
$id=$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["id"])) {
    $idErr = "Name is required";
  } else {
    $id = test_input($_POST["id"]);
  }
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }    
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}


?>

<h3>UPDATE</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  ID:<input type="text" name="id"><br>
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="UPDATE">  
</form>
<h3>DELETE</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
ID:<input type="text" name="id"><br>
<input type="submit" name="submit" value="DELETE">";
</form>

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
$sql2 = "UPDATE `registration` SET `NAME`='$name',`EMAIL`='$email',`WEBSITE`='$website',`COMMENT`='$comment',`GENDER`='$gender' WHERE ID='$id'";

if ($conn->query($sql2) === TRUE) {
    echo "updating successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

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

$sql3="DELETE FROM `registration` WHERE ID='$id'";
if ($conn->query($sql3) === TRUE) {
    echo "Deleting successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();*/
?>
<?php
$myfile = fopen("link.txt", "a+") or die("Unable to open file!");
echo fread($myfile,filesize("link.txt"));
fclose($myfile);
?>
<?php
$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
<form action="php.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

 <div class="footer">
 Copyright &copy; WorldCity.com <br>

 visit also:<a href="https://IndianTourism.com">Indian Tourouesm</a><br><a href="https://irctc.in">Indian Railways</a><br><h4>This Website is Completely Authorised by Mr.ROSHAN JHA</h4>


</div>
</body>
</html>
