<?php
// 1. Create
function createJson($myjson){
    $myjson = json_encode($_POST, JSON_PRETTY_PRINT);
    $fileSaves = __DIR__ . DIRECTORY_SEPARATOR . "jsonSaves" . DIRECTORY_SEPARATOR . $_POST["first_name"] . "_" . $_POST["last_name"] .".json";
    file_put_contents($fileSaves, $myjson);
    return $fileSaves;
}   
// 2. Search
if (!empty($_POST)) {

    function search($fileName){
        $fileSaves = "jsonSaves" . DIRECTORY_SEPARATOR . $_POST["first_name"] . "_" . $_POST["last_name"] .".json";
        
        if(file_exists($fileSaves)) {
    
        $info = file_get_contents($fileSaves);
        $array = json_decode($info, true);

        $keys = [
            "first_name"    => "Vardas",
            "last_name"     => "Pavarde",
            "age"           => "Amzius",
            "gender"        => "Lytis",
            "city"          => "Miestas",
            "email"         => "Pasto adresas",
            "news"          => "Naujienos",
            "rules"         => "Taisykles"
        ];
    
        foreach ($array as $key => $value) {
            if(!empty($value)) {
            echo $keys[$key] . ": " . $value . "<br>";
                    }
        }
        } else {
            echo "Vartotojas nerastas";
        }
    }
}

// 3. All users


function scanFiles($dir){
    $dir = __DIR__ . DIRECTORY_SEPARATOR . "jsonSaves" . DIRECTORY_SEPARATOR;
    $files = scandir($dir);

    return $files;
}

function jsonArray($dir, $file){
    $file = file_get_contents($dir . $value, FILE_USE_INCLUDE_PATH);
    $allInfo = json_decode($file, true);

    return $allInfo;
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