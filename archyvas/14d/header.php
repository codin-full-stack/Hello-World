<?php include "config.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Rimas</title>
</head>
<body>
    <header>
        <?php
            include "json.menu.php";      
            
            if(isset($_SESSION["username"])){
            echo "Ahoy " . $_SESSION["username"];
            }
        ?>
    </header>
</body>
</html>