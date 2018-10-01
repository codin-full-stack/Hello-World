<?php
$mysql ="INSERT INTO users (first_name, last_name, age, gender, city, email, news, rules, password) 
VALUES ('" . $_POST['first_name'] . "', '" . $_POST['last_name'] . "', " . $_POST['age'] . ", '" . $_POST['gender'] . "', '" . $_POST['city'] . "', '" . $_POST['email'] . "', '" . $_POST['news'] . "', '" . $_POST['rules'] . "', '" . $_POST['password'] . "')";

var_dump($mysql);
// if (mysqli_query($connection, $mysql)){
//         echo "Pavyko";
//     } else {
//         echo "Klaida " .$mysql . mysqli_error($connection);
//     }

// mysqli_close($connection);

?>