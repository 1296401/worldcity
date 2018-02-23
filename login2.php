<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


</head>
<body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
//if(($username != null) AND ($password != null)){
$username=$_POST['username'];
$password=$_POST['password'];
?>

<?php
//$username=$_POST['username'];
//$password=$_POST['password'];

if(($username == null) OR ($password == null)){
	header("location:login.html");
}
if (isset($_POST['submit']))
    {     
include("config.php");

session_start();

$username=$_POST['username'];
$password=$_POST['password'];

//$_SESSION['login_user'] = $pass;

$sql = "SELECT * FROM `login` where USER_ID='$username'  and PASSWORD='$password'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {
$pass = $row["NAME"]; 
$_SESSION['login_user'] = $pass;
}
//$pass = $row["NAME"];
//$_SESSION['login_user'] = $pass;
//print_r($result);
 //$_SESSION['login_user']=$row["USERNAME"];
//$query = mysql_query("SELECT username FROM 'login' WHERE username='$username' and password='$password'");
if ($result->num_rows > 0)
//if ($result != 0)
 //if (mysql_num_rows($sql) != 0)
{

 echo "<script language='javascript' type='text/javascript'> location.href='home2.php' </script>";   
  }

  else
  {
echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
}

}
}
    
?>
                        
  



</body>
</html>
