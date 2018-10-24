<?php include "header.php"; ?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="search">
    <form action="" method="POST">
      <br>Vardas:<br>
      <input type="text" name="username" value=""><br>
      Password:<br>
      <input type="password" name="password" value=""><br>
      <input class="mygtukas" style="border: none" name="submit" type="submit" value="Submit">
      <input class="mygtukas" style="border: none" type="button" onclick="location.href = 'index.php';" value="Back" />      
    </form>
</div>

<?php
    if (isset($_POST["submit"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
    }   
?>
