<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style3.css">
    <title>Admin Portal</title>
</head>
<body>
    <div class="container text-center">
        <div class="row title">
            <h1>ADMIN PANEL</h1>
            <h5>Responses from Contact Us page</h5>
        </div>
    </div>
    <div class="box container">
        <div class="row align-items-center justify-content-center">
            <div class="row">
            <?php

                $link = mysqli_connect("localhost", "root", "", "ContactUs");

                if($link == false){
                    die("ERROR: Could not connect to the MySQL database. ".mysqli_connect_error());
                }

                //selecting row that matches with password
                $sql = "SELECT * FROM UserInfo";

                $get = mysqli_query($link, $sql);

                if (mysqli_num_rows($get) > 0){
                    while ($row = mysqli_fetch_assoc($get)) {

                        echo
                        "<p style='font-size: 15px;'>" .
                        $row['user_id'].". " .
                        $row['f_name']." ".$row['l_name'] .
                        " (".$row['email'].")" . " commented: " .
                        $row["comment"] . "</p>" . "<br>";

                      }

                    }
                    else {
                      echo "No Comments.";
                    }

                mysqli_close($link);

            ?>
            </div>
        </div>
    </div>
</body>
</html>