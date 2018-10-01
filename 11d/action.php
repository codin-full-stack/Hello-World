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
    include "createJson.php";
    createJson($fileSaves);
    // jei nesutiks su taisyklemis, nesaugos registracijos
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
        echo $array[$key] . ":" . $value . "<br>";
    }
};

//                 $myjson = json_encode($_POST, JSON_PRETTY_PRINT);
// // var_dump($myjson);

//                 $fileSaves = "jsonSaves" . DIRECTORY_SEPARATOR . $_POST["first_name"] . "_" . $_POST["last_name"] .".json";
// // kurs naujus failus, tada nebereik FILE_APPEND
// // $file = "json.put.json"; kad saugotu i viena bet file put contents reikia irasyti FILE_APPEN
//                 file_put_contents($fileSaves, $myjson);
// // var_dump($file);

?>
<button>Atgal</button>