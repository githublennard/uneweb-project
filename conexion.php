
<?php
 
function OpenCon()
 {
 $dbhost = "mysql.cba.pl";
 $dbuser = "adminvip5";
 $dbpass = "Lirimizo123";
 $db = "kfrblennard";
 
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>

