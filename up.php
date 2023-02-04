<?php
include_once 'config.php';

if(isset($_POST['submit']))
{    
     $id = $_POST['id'];
     $username = $_POST['username'];

    // sql to update a record
    $sql = "UPDATE login SET username='$username' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header('Location: home.php');
    } else {
    echo "Error deleting record: " . $conn->error;
    }
}

?>