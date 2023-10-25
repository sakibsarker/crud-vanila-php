<?php

    include 'connect.php';

    $id = $_POST['id'];

    $query = "DELETE FROM data WHERE id = $id";
    
    $run = mysqli_query($con ,  $query);

    if(!$run){
        echo 'deletion failed!';
    } else{
        header('location: list.php');
    }

?>
