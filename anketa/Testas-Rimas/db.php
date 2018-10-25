<?php
var_dump($_POST);
$mysql ="INSERT INTO users (email, first_name, last_name, age, gender, car, driving, road, repair, like) 
VALUES ('" . $_POST['email'] . "', '" . $_POST['first_name'] . "', '" . $_POST['last_name'] . "', '" . $_POST['age'] . "', '" . $_POST['gender'] . "', '" . $_POST['car'] . "', '" . $_POST['driving'] . "', '" . $_POST['road'] . "', '" . $_POST['repair'] . "', '" . $_POST['like'] . "')";
// var_dump($connection);
var_dump($mysql);
if (mysqli_query($connection, $mysql)){
        echo "Pavyko";
    } else {
        echo "Klaida " .$mysql . mysqli_error($connection);
    }

mysqli_close($connection);

?>