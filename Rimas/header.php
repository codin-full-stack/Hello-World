<?php include "config.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Rimas</title>
    <!-- <script src="script.js" async></script> -->
</head>
<body>
    <header>
        <div class="navbar">
            <div class="burger"></div>
            <?php  include "menu.php"; ?>
        </div>
    <!-- <div class="left-time"></div> -->
        <?php
           

            if (! empty($_SESSION["id"])){
                $sql = "SELECT * FROM users WHERE id = '" . $_SESSION["id"] . "' LIMIT 1" ;
                $result = mysqli_query($connection, $sql);
                $row = mysqli_fetch_assoc($result);
                
                if(isset($_SESSION["id"])){
                echo "<br>" . "Ahoy " . $row["first_name"] . " " . $row["last_name"];
                echo "<br><br><a href='password.php'>Keisti Slaptazodi</a><br>";
                echo "<br><a href='update.php'>Keisti Duomenis</a><br>";
                echo "<br><a href='logout.php'>Atsijungti</a><br>";
                }
            }
        ?>
    </header>