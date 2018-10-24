<?php
$Json = file_get_contents("json.json");

$array = json_decode($Json, true);

foreach($array as $key => $value){
    if (is_array($value)){
        echo $key . "<br>" ;

        foreach($value as $key1 => $value1){
            
            if(is_array($value1)){
                echo $key1 . ":" . "<br>" ;

                foreach($value1 as $key2 => $value2){
                    if(is_array($value2)){
                        echo $key2 . ":" . "<br>" ;

                        foreach($value2 as $key3 => $value3){
                            echo $key3 . ': ' . $value3 . "<br>";
                        }

                    } else {
                        echo $key2 . ":" . "<br>" ;
                    }
                }

            } else {
                echo $key1 . ": " . "<br>" . $value1 . "<br>";
            }
        }   
    }
}