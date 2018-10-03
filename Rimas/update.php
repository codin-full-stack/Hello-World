<?php include "header.php"; ?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<form action="" method="POST">
    <div class="board">
        <div class="container">
            <div class="field">
            <div class="input-group">
                  <label for="email"><b>EMAIL</b></label><br>
                  <input type="email" value="<?php echo $row['email'] ?>" name="email" required>    
            </div>
            <div class="input-group">
                  <label for="first_name"><b>Vardas</b></label><br>
                  <input type="text" value="<?php echo $row['first_name'] ?>" name="first_name" required>                    
            </div>
            <div class="input-group">
                  <label for="last_name"><b>Pavardė</b></label><br>
                  <input type="text" value="<?php echo $row['last_name'] ?>" name="last_name" required>                    
            </div>
            <div class="input-group">
                  <label for="age"><b>Amžius</b></label><br>
                  <input type="number" value="<?php echo $row['age'] ?>" name="age" required>                    
            </div>
            </div>
            <div class="fieldradio">
            <div class="input-group">
                  <label for="gender"><b>Lytis</b></label><br>
                  <input type="radio" name="gender" value="Vyras" checked><b>Vyras</b>
                  <input type="radio" name="gender" value="Moteris">Moteris                    
            </div>
            </div>
            <div class="input-group">
                  <label for="city"><b>Miestai</b></label><br>
                  <?php include "cities.php" ?>                    
            </div>
            <div class="input-group">
                  <label for="news"><b>Naujienos</b></label>
                  <input type="checkbox" name="news" value="Taip" checked>                    
            </div>            
        </div>
        <div class="signin">
            <div class="input-group2">
                <button onclick="location.href = 'index.php';" class="a">Terms & Privacy.</button>
            </div>    
            <div class="input-group2">
                <button type="submit" class="b">Submit</button>
            </div>
        </div>
    </div>  
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