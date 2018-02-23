<?php
//session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
//session_unset(); 
/*
      if(!isset($_SESSION["user"])){
      header("Location: login.php");
      exit;  
  }
	session_unset(); 

// destroy the session 
       unset($_SESSION["user"]);  
      //session_destroy();
session_destroy();

//echo "All session variables are now removed, and the session is destroyed." 
*/
?>
<?php
session_start();
unset($_SESSION["user"]);
//unset($_SESSION["user_name"]);
$url = "login.html";
if(isset($_GET["session_expired"])) {
	$url .= "?session_expired=" . $_GET["session_expired"];
}
header("Location:$url");
?>

</body>
</html>

