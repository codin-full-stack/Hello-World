<?php include "header.php"; ?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="search">
    <form action="" method="POST">
      <br>Pasword:<br>
      <input type="password" name="password" value=""><br>
      Reply Password:<br>
      <input type="password" name="passwordConfig" value=""><br>
      <input class="mygtukas" style="border: none" name="submit" type="submit" value="Submit">
      <input class="mygtukas" style="border: none" type="button" onclick="location.href = 'index.php';" value="Back" />      
    </form>
</div>
<?php
if (! empty($_POST)){
      if ($_POST["password"] == $_POST["passwordConfig"]) {
        echo "slaptazodis sukurtas";
    } else {
        echo "Neteisingai ivestas slaptazodis";
    }
}
?>