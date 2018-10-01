<?php
$Json = file_get_contents("json.json");

$array = json_decode($Json, true);

$array = $array["menu"]["items"];

foreach($array as $key => $value){
    if(is_array($value)){

        foreach($value as $key1 => $value1){
            echo $key1 . ': ' . $value1 . "<br>";

        } 
    }   
}
