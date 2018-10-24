<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="search">
    <form action="" method="POST">
      <br>Vardas:<br>
      <input type="text" name="first_name" value=""><br>
      Pavarde:<br>
      <input type="text" name="last_name" value=""><br>
      <input class="mygtukas" style="border: none" type="submit" value="Submit">
<input class="mygtukas" style="border: none" type="button" onclick="window.location.href = 'index.php';" value="Back" />      
    </form>
</div>

<?php

if (!empty($_POST)) {

$fileSaves = "jsonSaves" . DIRECTORY_SEPARATOR . $_POST["first_name"] . "_" . $_POST["last_name"] .".json";

if(file_exists($fileSaves)) {
var_dump($fileSaves);

$info = file_get_contents($fileSaves);
$array = json_decode($info, true);

foreach ($array as $key => $value) {
    if(!empty($value)) {
    echo $key . ": " . $value . "<br>";
            }
        }
    } else {
        echo "Vartotojas nerastas";
    }
}



// if (!empty($_POST)) {
//     $fileSaves =file_exists("jsonSaves/") . DIRECTORY_SEPARATOR . $_POST["first_name"] . "_" . $_POST["last_name"] .".json";
//     $myJson = json_encode($_POST, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
//     file_put_contents(urlencode($fileSaves), $myJson);
//     $yourJson = file_get_contents(urlencode($fileSaves));
//     $json = json_decode($yourJson, true);
//     foreach ($json as $key => $value) {
//         if (!is_array($value)) {
//             echo $key . ": " . $value . "<br/>";
//         } else {
//             foreach ($value as $key2 => $value2) {
//                 echo $key2 . ": " . $value2 . "<br/>";
//             }
//         }
//     }
//  }


// $array = [
//     "first_name"    => "Vardas",
//     "last_name"     => "Pavarde",
//     "age"           => "Amzius",
//     "gender"        => "Lytis",
//     "city"          => "Miestas",
//     "email"         => "Pasto adresas",
//     "news"          => "Naujienos",
//     "rules"         => "Taisykles"
// ];

// if (file_exists($file)) {
//     foreach($array as $key => $value);
//         echo $key . $value;
//     } else {
//         echo "Klaida!";
// }

// file_get_contents($_POST, $fileSaves);

// $array = json_decode($file, true);

// foreach($array as $key => $value){
//     echo $key . ": " . $value . "<br>";
// }
?>