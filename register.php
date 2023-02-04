<?php
include_once 'config.php';
if(isset($_POST['submit']))
{    
     $id = $_POST['id'];
     $username = $_POST['username'];
     $password = $_POST['password'];
     $sql = "INSERT INTO login (id,username,password)
     VALUES ('$id','$username','$password')";
     if (mysqli_query($conn, $sql)) {
        header('Location: home.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>