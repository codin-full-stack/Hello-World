<?php include "header.php"; ?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<form class="duomenys" action="" method="POST">
      Vardas:<br>
      <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>"><br>
      Pavarde:<br>
      <input type="text" name="last_name" value="<?php echo $row['last_name'] ?>"><br>
      Amzius:<br>
      <input type="number" name="age" value="<?php echo $row['age'] ?>"><br>
      Lytis:<br>
      <input type="radio" name="gender" value="Vyras" checked> Vyras
      <input type="radio" name="gender" value="Moteris"> Moteris<br>
      Miestas:<br>
      <?php include "cities.php" ?>
      Pasto adresas:<br>
      <input type="email" name="email" value="<?php echo $row['email'] ?>"><br>
      <input type="checkbox" name="news" value="Taip" checked> Gauti naujienas email.<br>
      <br><br>
      <input class="mygtukas" style="border: none" type="submit" value="Submit">
      <input class="mygtukas" style="border: none" type="button" onclick="location.href = 'index.php';" value="Back" />    
</form>
<?php
if (! empty($_POST["email"])){
    $sql = "SELECT * FROM users WHERE id = '" . $_SESSION["id"] . "' LIMIT 1" ;
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
        
        if(isset($_SESSION["id"])){
            $mysql ="UPDATE users SET first_name = '". $_POST['first_name']."' , last_name= '". $_POST['last_name']."', age= '". $_POST['age']."', gender= '". $_POST['gender']."', city= '". $_POST['city']."', email= '". $_POST['email']."', news= '". $_POST['news']."' WHERE id ='" . $_SESSION["id"] . "'";
            if (mysqli_query($connection, $mysql)){
                echo "Pavyko";
            } else {
                echo "Klaida " .$mysql . mysqli_error($connection);
            }
        }
    }
}
mysqli_close($connection);

?>