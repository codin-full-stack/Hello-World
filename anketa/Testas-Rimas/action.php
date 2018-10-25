<?php

$sql = "SELECT email FROM users WHERE email = '" . $_POST['email'] . "'" ;
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
//          ar jau toks email yra
    if (! empty($row)) {
        echo "Toks email jau Pilde anketa";
    } else {


        include "db.php";
    }

?>