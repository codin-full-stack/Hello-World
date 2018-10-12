<?php
include 'header.php';
?>   

<form method="POST" class="login" action="">
    
    <h3>Prisijunkite!</h3><br><br>

    El. paštas:<br>
    <input type="email" name="email"><br><br>
    Slaptažodis:<br>
    <input type="password" name="pass"><br><br>

    <input class="reg_but" type="submit" value="Prisijungti"><br><br>

        <?php
            
            $userInfo = 'SELECT * FROM users WHERE email = "' . $_POST['email'] . '" AND pass = "' . $_POST['pass'] . '"';
            $result = mysqli_query($conn,$userInfo);
            while($row = mysqli_fetch_assoc($result)){
                    echo 'Vartotojo duomenys:' . '<br>'  . $row["first_name"]. " " . $row["second_name"] . "<br>" . $row["age"] . "<br>" . $row["email"] . "<br>" . $row["city"] . "<br>" . $row["gender"] . "<br>" . $row["comment"] .  "<br>";
                } 

            if (!empty($_POST['email'])) {
                echo "Toks vartotojas neegzistuoja!";
            }

        ?>

    </form>

<?php
include 'footer.php';
?>