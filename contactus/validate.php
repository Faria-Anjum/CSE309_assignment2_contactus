<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact-us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<?php

$id = $_GET['id'];
$pass = $_GET['password'];

$link = mysqli_connect("localhost", "root", "", "ContactUs");

if($link == false){
    die("ERROR: Could not connect to the MySQL database. ".mysqli_connect_error());
}

//selecting row that matches with password
$sql = "SELECT * FROM Admin WHERE id='" . $id . "'";

$get = mysqli_query($link, $sql);

if (mysqli_num_rows($get) == 0){
    die("ERROR: ID not found. ".mysqli_connect_error());
}

$row = mysqli_fetch_assoc($get);


if($pass == $row['password']){
    header("location: admin.php");
} else{
    echo "<h1 style='display:flex; text-align:center; justify-content:center; text-shadow:0 0 3px black;'>"."ERROR: Password does not match, please try again."."</h1>";
}

mysqli_close($link);

?>
</body>
</html>
