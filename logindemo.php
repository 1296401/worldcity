<?php
//session_start();
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