<?php include "header.php"; ?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <div class="board">
            <div class="container">
                <div class="input-group">
                    <label for="password"><b>PASSWORD</b></label><br>
                    <input type="password" placeholder="**********" name="password" required>                    
                </div>
                <div class="input-group">
                    <label for="new_password"><b>NEW PASSWORD</b></label><br>
                    <input type="password" placeholder="**********" name="new_password" required>                    
                </div>
                <div class="input-group">
                    <label for="new_password2"><b>REPEAT NEW PASSWORD</b></label><br>
                    <input type="password" placeholder="**********" name="new_password2" required>                    
                </div>
            </div>
            <div class="signin">
                <div class="input-group2">
                    <button onclick="location.href = 'index.php';" class="a">Home</button>
                </div>    
                <div class="input-group2">
                    <button type="submit" class="b">SUBMIT</button>
                </div>
            </div>
        </div>   
    </form>
</body>

<?php
// var_dump($_POST);

if (!empty($_POST['password']) && ($_POST['new_password']!=="") && ($_POST['new_password2']!=="") ) {

   if ($_POST['new_password'] == $_POST['new_password2']){

       $userSql = "SELECT id,password FROM users WHERE id = '" . $_SESSION['id'] . "' LIMIT 1";

      // execute MYSQL query
       $result = mysqli_query($connection, $userSql);

       if(mysqli_num_rows($result) > 0){

           $row = mysqli_fetch_assoc($result); // ateina duomenu masyvas is DB
           $oldPassword = md5($_POST['password']);

           // patikrinam ar passwordai sutampa su isaugotu ir postinamu
           if($row['password'] == $oldPassword) {
               //atnaujinam info
               $newPassword = md5($_POST['new_password']);

               $updateSql = "UPDATE users SET password='" . $newPassword . "' WHERE id='" . $_SESSION['id'] . "'";

               if(mysqli_query($connection, $updateSql)) {
                   echo 'Slaptažodis pakeistas';
               } else {
                   echo 'Error! Įvyko klaida, duomenys neatsinaujino';
               }
           } else {
               echo 'Error! Senas password įvestas blogai';
           }


       } else {
           echo "Error! Toks vartotojas neegzistuoja.";
       }

   } else {
       echo "Error! Password nesutampa";
   }

} else {
   echo "Nesuvesti slaptažodžiai";
}

echo "<br><br><a href='index.php'>Pagrindinis puslapis</a><br>";

?>