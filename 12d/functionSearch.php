<?php

if (!empty($_POST)) {

$fileSaves = __DIR__ . DIRECTORY_SEPARATOR . "jsonSaves" . DIRECTORY_SEPARATOR . $_POST["first_name"] . "_" . $_POST["last_name"] .".json";
function search($fileSaves){
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
}
?>