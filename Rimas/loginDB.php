<?php include "header.php"; ?>
<head>
    <link rel="stylesheet" href="style.css">
</head>

<?php
include "formlog.php";

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
        echo "Blogai ivestas slaptazodis";
    }

} else {
    echo 'Tokio vartotojo nera';
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