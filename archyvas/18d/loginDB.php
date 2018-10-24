<?php include "header.php"; ?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="search">
    <form action="" method="POST">
      <br>Email:<br>
      <input type="text" name="email" value=""><br>
      <br>Password:<br>
      <input type="password" name="password" value=""><br>
      <input class="mygtukas" style="border: none" name="submit" type="submit" value="Submit">
      <input class="mygtukas" style="border: none" type="button" onclick="location.href = 'index.php';" value="Back" />      
    </form>
</div>

<?php

if (! empty($_POST)) {

$sql = "SELECT * FROM users WHERE email = '" . $_POST['email'] . "' LIMIT 1" ;
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if(! empty($row)) {
    var_dump($row);
    var_dump($row['password']);
    // ar pass sutampa
    //jei sutampa - setini sesija ir redirectini
    if ($row['password']== md5($_POST['password'])){
        // settinu sesija
        $_SESSION["id"] = $row["id"];
        // redirect to index
        header('Location: index.php');
        exit;
    } else {
        echo "Slaptazodis nesutampa";
    }

} else {
    echo 'Vartotojo nera';
}


    // $result = mysqli_query($connection, $sql);
    // while($row = mysqli_fetch_assoc($result)) {
    //     var_dump($row);
    //     if (($row['first_name']==$_POST['first_name']) and ($row['last_name']==$_POST['last_name']) and (md5($row['password'])==$_POST['password'])){
    //         echo "Labas " . $row['first_name'];
    //     } else {
    //         echo "Nera duomenu";
    //     }
    // }
}
?>