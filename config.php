<?php 

$servername="localhost";
$username="root";
$password="";
$database="bank system";

$conn=mysqli_connect($servername,$username,$password,$database);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>