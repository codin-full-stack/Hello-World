<?php

    $myjson = json_encode($_POST, JSON_PRETTY_PRINT);
// var_dump($myjson);

    $fileSaves = "jsonSaves" . DIRECTORY_SEPARATOR . $_POST["first_name"] . "_" . $_POST["last_name"] .".json";
// kurs naujus failus, tada nebereik FILE_APPEND
// $fileSaves = "json.put.json"; kad saugotu i viena bet file put contents reikia irasyti FILE_APPEN
    file_put_contents($fileSaves, $myjson);
// var_dump($file);

?>