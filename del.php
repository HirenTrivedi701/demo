<?php
include_once 'config.php';

if(isset($_POST['submit']))
{    
     $id = $_POST['id'];

    // sql to delete a record
    $sql = "DELETE FROM login WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header('Location: home.php');
    } else {
    echo "Error deleting record: " . $conn->error;
    }
}

?>