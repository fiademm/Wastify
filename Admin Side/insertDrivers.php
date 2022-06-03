<?php
include 'conn.php';

if(isset($_POST['submit']))
{    
     $fullname = $_POST['fullname'];
     $uname = $_POST['username'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];

     $sql = "INSERT INTO Drivers (Username, Fullname, Email, Phone) VALUES ('$fullname', '$uname', '$email', '$phone')";
     if (mysqli_query($dbCon, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($dbCon);
     }
     mysqli_close($dbCon);
}
?>