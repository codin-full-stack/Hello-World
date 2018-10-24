<?php

function arrayToJsonFile($data, $filename) {
    $myJSON = json_encode($data, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE); 
    file_put_contents($filename, $myJSON);

}

function jsonFileToArray($filename) {
    
    $json = file_get_contents($filename);
    $array = json_decode($json, true);

    return $array;
}

function scanFiles($directory) {    //funkcija rasti failams direktorijoj

    $files = scandir($directory);
    $info2 = [
        'name'=>'Vardas: ',
        'surname'=>'Pavardė: ',
        'age'=>'Amžius: ',
        'emailaddress'=>'El.paštas: ',
        'city'=>'Miestas: ',
        'gender'=>'Lytis: ',
        'comentBox'=>'Komentaras: ',
        'newsletter'=>'Naujienlaiškis: ',
        'termsCheck'=> 'Sutinku su taisyklėmis: '
    ];
    
    foreach($files as $file){
        if(file_exists($directory . DIRECTORY_SEPARATOR . $file)) { // tikrinu ar failas egzistuoja
            $ext = pathinfo($file, PATHINFO_EXTENSION); 
            if($ext == 'json') {                                   //tikrinu failo tipa
                $info = file_get_contents($directory . DIRECTORY_SEPARATOR . $file);
                $json = json_decode($info, true);
                
                foreach ($json as $key => $value) {             // pries tai decodinu failus ir gaunu informacija, kuria atvaizduoju
                    if (! empty($value)) {
                        echo $info2[$key] . ': ' .  $value . '<br>' ;
                    } else{
                        echo "<br>";
                    }
                } 
            }
        }
        
    }
    
}

