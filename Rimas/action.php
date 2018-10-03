<?php
//         jei nesutiks su taisyklemis, nesaugos registracijos
if (empty($_POST["rules"])) {
    echo "Nesutikote su taisyklemis" ."<br>";
} else {

$sql = "SELECT email FROM users WHERE email = '" . $_POST['email'] . "'" ;
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
//          ar jau toks email yra
    if (! empty($row)) {
        echo "Toks email jau egzistuoja";
    } else {

        if (! empty($_POST["password"] && $_POST["passwordConfig"])){

            if ($_POST["password"] == $_POST["passwordConfig"]) {
                $_POST["password"] = md5($_POST["password"]);
                // echo "Registracija pavyko!" . "<br>";

                include "todatabase.php";

            }
        }
    }
}
            

?>
<button>Atgal</button>