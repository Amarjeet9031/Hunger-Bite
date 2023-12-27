<?php
// include('conect.php');
if(isset($_POST['submit']))
{

$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];



$sql = "INSERT INTO contact ( name,email,subject,message) VALUES ('$name', '$email', '$subject','$message')";
if(mysqli_query($conn, $sql)){
    ?>
    <script>
        alert("Thanks For Contacts");
    </script>
    <?php
// $insert= true;




} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}

?>
