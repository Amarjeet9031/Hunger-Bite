<?php
// $insert = false;
error_reporting();
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$mobile=$_POST["mobile"];
// $date=$_POST['date'];
$people=$_POST["people"];
$message=$_POST["message"];




$sql = "INSERT INTO booking ( name,mobile,people,message) VALUES ('$name', '$mobile','$people','$message')";
if(mysqli_query($conn, $sql)){
    ?>
    <script>
        alert("Thanks For Booking");
    </script>
    <?php
// echo "congration";

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}

?>