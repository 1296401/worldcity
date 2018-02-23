<?php

/*
// the message
$msg = "First line of text Second line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg);

// send email
mail("Roshan.Jha@Pfizer.com","My subject",$msg);
*/


/*$list = array
(
"Peter,Griffin,Oslo,Norway",
"Glenn,Quagmire,Oslo,Norway",
);

$file = fopen("contacts.csv","w");

foreach ($list as $line)
  {
  fputcsv($file,explode(',',$line));
  }

fclose($file); */


/*$user = "someone@example.com";
$hash = ezmlm_hash($user);

echo "The hash value for $user is: $hash.";*/
/*

$xml=<<<XML
  <cars>
    <car name="Volvo">
    <child/>
    <child/>
    <child/>
    <child/>
  </car>
 
  <car name="Maruti">
    <child/>
    <child/>
    <child/>
  </car>
</cars>
XML;

$elem=new SimpleXMLElement($xml);
foreach ($elem as $cars)
  {
  printf("%s has %d children.<br>", $cars['name'], $cars->count());
  }



*/

  /*  $servername = "localhost";
    $username = "root";
	$password = "";
	$dbname = "cityworld.com";

    
    $con = new mysqli($servername, $username, $password,$dbname); 

        $sql_data="SELECT * FROM `registration`";
        $result_data=$con->query($sql_data);
        $results=array();
    $filename="newexcel.xls"; // File Name
    // Download file
    header("Content-Disposition: attachment; filename=\"$filename\"");
    header("Content-Type: application/vnd.ms-excel");

    $flag = false;
    while ($row = mysqli_fetch_assoc($result_data)) {
        if (!$flag) {
            // display field/column names as first row
            echo implode("\t", array_keys($row)) . "\r\n";
            $flag = true;
        }
        echo implode("\t", array_values($row)) . "\r\n";
    }
    
*/


    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "cityworld.com";
//mysql and db connection

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {  //error check
    die("Connection failed: " . $con->connect_error);
}
else
{

}


$DB_TBLName = "registration"; 
$filename = "excelsheet";  //your_file_name
$file_ending = "xls";   //file_extention

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
header("Pragma: no-cache"); 
header("Expires: 0");

$sep = "\t";

$sql="SELECT * FROM `registration`"; 
$resultt = $con->query($sql);
while ($property = mysqli_fetch_field($resultt)) { //fetch table field name
    echo $property->name."\t";
}

print("\n");    

while($row = mysqli_fetch_row($resultt))  //fetch_table_data
{
    $schema_insert = "";
    for($j=0; $j< mysqli_num_fields($resultt);$j++)
    {
        if(!isset($row[$j]))
            $schema_insert .= "NULL".$sep;
        elseif ($row[$j] != "")
            $schema_insert .= "$row[$j]".$sep;
        else
            $schema_insert .= "".$sep;
    }
    $schema_insert = str_replace($sep."$", "", $schema_insert);
    $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
    $schema_insert .= "\t";
    print(trim($schema_insert));
    print "\n";
}

?>