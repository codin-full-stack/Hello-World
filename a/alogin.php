<link rel="stylesheet" href="styles/styles.css" type="text/css">
<html>
    <head>
        <title>Prisiunk!</title>
    </head>
    <body background="media/login.jpg"></body>
<html>
<div class="container">
    <form action="" method="POST">
        <label for="Username"><b>Username</b></label>
        <input type="text" placeholder="Username" name="uname" required>
        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Password" name="upswd" required>
        <div class="mygtukas">
            <button type="submit">Prisijungti</button>
        </div>
    </form>
<form action="form.php" method="POST">
<button class="mygtukasReg" type="submit">Registruotis!</button>
</form>

<?php
session_start();
if (!empty($_POST)) {
    $_SESSION = [
        'uname' => $_POST['uname'],
        'upswd' => $_POST['upswd'],
    ];
}

if(isset($_SESSION['uname'])){
    header("location: index.php");
}
?>

<?php include('footer.php')?>
