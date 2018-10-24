<?php

    if (empty($_POST["rules"])) {
        echo "Nesutikote su taisyklemis" ."<br>";
    } else {
    //         jei nesutiks su taisyklemis, nesaugos registracijos



        if (! empty($_POST["password"] && $_POST["passwordConfig"])){
            if ($_POST["password"] == $_POST["passwordConfig"]) {
                $_POST["password"] = md5($_POST["password"]);
                unset($_POST["passwordConfig"]);
                echo "Registracija pavyko!" . "<br>";

                include "todatabase.php";

            }
        }
    }
            

?>
<button>Atgal</button>