<?php
// $insert = false;
error_reporting();
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$mobile=$_POST["mobile"];
// $date=$_POST['date'];
$subject=$_POST["subject"];
$message=$_POST["message"];




$sql = "INSERT INTO register ( name,mobile,subject,message) VALUES ('$name', '$mobile','$subject','$message')";
if(mysqli_query($conn, $sql)){
// echo  "Cong";
 ?>
    <script>
        alert("Thanks For Contribute");
    </script>
    <?php

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

}

?>