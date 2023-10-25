
<?php

include 'connect.php';

$id = $_POST['id'];

$query = "SELECT * FROM data WHERE name = '$id'";

$run = mysqli_query($con, $query);

if(mysqli_num_rows($run) > 0){
    echo '<table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Gender</th>
            </tr>';
    while($rows = mysqli_fetch_assoc($run)){
        echo '<tr>
                <td>'.$rows['id'].'</td>
                <td>'.$rows['name'].'</td>
                <td>'.$rows['email'].'</td>
                <td>'.$rows['contact'].'</td>
                <td>'.$rows['gender'].'</td>
                </tr>';
    }
    echo '</table>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<form action="delete.php" method="post">
    <input type="text" name="id" id="id" class="box" placeholder="enter the id number">
    <input type="submit" value="DELETE" class="dbox">
</form>
<form action="update.php" method="post">
    <input type="text" name="id" id="id" class="box" placeholder="enter the id number">
    <input type="text" name="name" id="id" class="box" placeholder="enter the updated name">
    <input type="submit" value="UPDATE" class="sbox">
</form>
<form action="search.php" method="post">
    <input type="text" name="id" id="id" class="box" placeholder="enter a name">
    <input type="submit" value="SEARCH" class="sbox">
</form>
</body>
</html>
