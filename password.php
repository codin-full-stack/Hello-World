<?php include "header.php"; ?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="search">
    <form action="" method="POST">
      Password:<br>
      <input type="password" name="password" value=""><br>
      New Password:<br>
      <input type="password" name="new_password" value=""><br>
      Repeat new password:<br>
      <input type="password" name="new_password2" value=""><br>
      <input class="mygtukas" style="border: none" name="submit" type="submit" value="Submit">
      <input class="mygtukas" style="border: none" type="button" onclick="location.href = 'index.php';" value="Back" />      
    </form>
</div>

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