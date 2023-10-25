<?php

    include 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];

    $query = "INSERT INTO data(name, email, contact, gender)
                VALUES('$name', '$email', '$contact', '$gender')";

    $run = mysqli_query($con, $query);

    if(!$run){
        echo 'submission failed!';
    } else{
        header('location: list.php');
    }
?>
