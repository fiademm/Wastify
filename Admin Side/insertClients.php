
<?php

include 'conn.php';
if(isset($_POST['submit']))
{    
     $fullname = $_POST['fullname'];
     $uname = $_POST['username'];
     $location = $_POST['location'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];

     $sql = "INSERT INTO Client (Fullname, Username, Location, Email, Phone) VALUES ('$fullname', '$uname', '$location', '$phone', '$email')";
     if (mysqli_query($dbCon, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($dbCon);
     }
     mysqli_close($dbCon);
}

?>