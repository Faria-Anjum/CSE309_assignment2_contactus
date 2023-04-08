<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact-us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['email'];
$ment = $_POST['comment'];

$link = mysqli_connect("localhost", "root", "", "ContactUs");

if($link == false){
    die("ERROR: Could not connect to the MySQL database. ".mysqli_connect_error());
}

$sql = "INSERT INTO UserInfo (f_name, l_name, email, comment) VALUES ('$fname', '$lname', '$mail', '$ment')" ;

if(mysqli_query($link, $sql)){
    echo "<h1 style='display:flex; text-align:center; justify-content:center; text-shadow:0 0 3px black;'>" . 'Your information was recorded successfully!' . "</h1>";
} else{
    echo 'ERROR: Unable to execute $sql. '.mysqli_error($link);
}

mysqli_close($link);

?>
</body>
</html>


