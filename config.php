
<?php
	/*$hostname='localhost';
	$user = 'root';
	$password = ' ';
	$mysql_database = 'cityworld.com';
	$db = mysql_connect($hostname, $user, $password,$mysql_database);
	mysql_select_db("cityworld.com", $db);*/
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
?>