<?php include "header.php"; ?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="search">
    <form action="" method="POST">
      <br>Vardas:<br>
      <input type="text" name="first_name" value=""><br>
      Pavarde:<br>
      <input type="text" name="last_name" value=""><br>
      <br>Password:<br>
      <input type="password" name="password" value=""><br>
      <input class="mygtukas" style="border: none" name="submit" type="submit" value="Submit">
      <input class="mygtukas" style="border: none" type="button" onclick="location.href = 'index.php';" value="Back" />      
    </form>
</div>

<?php

$sql = "SELECT * FROM users";

    $result = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        var_dump($sql);
        if (($row['first_name']==$_POST['first_name']) and ($row['last_name']==$_POST['last_name']) and (md5($row['password'])==$_POST['password'])){
            echo "Labas " . $row['first_name'];
        } else {
            echo "Nera duomenu";
        }
    }
?>