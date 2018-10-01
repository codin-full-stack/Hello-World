<?php
// var_dump($_POST);

$array = [
    "first_name"    => "Vardas",
    "last_name"     => "Pavarde",
    "age"           => "Amzius",
    "gender"        => "Lytis",
    "city"          => "Miestas",
    "email"         => "Pasto adresas",
    "news"          => "Naujienos",
    "rules"         => "Taisykles"
];

if (empty($_POST["rules"])) {
         echo "Nesutikote su taisyklemis" ."<br>";
} else {
    if (isset($_POST["gender"])) {
        if($_POST["gender"] == "Vyras") {
            echo "Sveikas " . $_POST["first_name"] ." " . $_POST["last_name"] ."<br>" ."<br>";
        } elseif ($_POST["gender"] == "Moteris") {
            echo "Sveika" . $_POST["first_name"] ." " . $_POST["last_name"] ."<br>" ."<br>";
        } else {
            echo "Labas" . $_POST["first_name"] ." " . $_POST["last_name"] ."<br>" ."<br>";
        }
    }

    foreach($_POST as $key => $value){
        echo $array[$key] . ": " . $value . "<br>";
    }
};
?>
<button>Atgal</button>