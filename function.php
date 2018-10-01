<?php
function createJson($myjson){
    $myjson = json_encode($_POST, JSON_PRETTY_PRINT);
    $fileSaves = __DIR__ . DIRECTORY_SEPARATOR . "jsonSaves" . DIRECTORY_SEPARATOR . $_POST["first_name"] . "_" . $_POST["last_name"] .".json";
    file_put_contents($fileSaves, $myjson);
    return $fileSaves;
}
?>

