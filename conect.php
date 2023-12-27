<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hungerbite";


$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn){
  //  echo "Connection ok";
}
else "Connection failed";

?>
