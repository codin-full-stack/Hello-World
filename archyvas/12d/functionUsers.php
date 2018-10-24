<?php

$dir = __DIR__ . DIRECTORY_SEPARATOR . "jsonSaves" . DIRECTORY_SEPARATOR;

function scanFiles($dir){
    $files = scandir($dir);

    return $files;
    var_dump($files);
}

function jsonArray($dir, $file){
    $file = file_get_contents($dir . $value, FILE_USE_INCLUDE_PATH);
    $allInfo = json_decode($file, true);

    return $allInfo;
    var_dump($allInfo);
}

function AllUsers($dir, $files){
    foreach ($files as $key => $value) {
        $pos = strpos($value, ".json");
     
        if ($pos != false) {
            echo  "<br>" . $value . "<br>";
             $file = file_get_contents($dir . $value, FILE_USE_INCLUDE_PATH);
             $allInfo = json_decode($file, true);
            //  $allInfo = jsonArray($dir, $file);
     
             foreach ($allInfo as $key => $item) {
                 if (!is_array($item)) {
                     echo $key . ": " . $item . "<br/>" ;  
                 }
             }
         }
     }
}
?>