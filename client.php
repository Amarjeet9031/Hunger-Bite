<?php
$insert = false;
error_reporting();
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$mobile=$_POST["mob"];
$pincode=$_POST["pincode"];
$address=$_POST["address"];
$city=$_POST["city"];




$sql = "INSERT INTO client ( name,mob,pincode,address, city) VALUES ('$name', '$mobile', '$pincode','$address','$city')";
if(mysqli_query($conn, $sql)){
// echo  "Cong";
$insert= true;


} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}

?>