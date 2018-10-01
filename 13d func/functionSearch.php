<?php

if (!empty($_POST)) {

    function search($files){
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
?>