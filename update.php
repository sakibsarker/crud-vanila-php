<?php

    include 'connect.php';

    $id = $_POST['id'];
    $name = $_POST['name'];

    $query = "UPDATE data SET name= '$name' WHERE id=$id";
    
    $run = mysqli_query($con ,  $query);

    if(!$run){
        echo 'deletion failed!';
    } else{
        header('location: list.php');
    }

?>
