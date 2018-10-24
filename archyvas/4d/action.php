<?php
// var_dump($_GET);

$a=$_GET["name1"];
$b=$_GET["name2"];

function checkFields($field){
   if (empty($field)){
       echo "Klaida! Užpildyti ne visi laukeliai.";
   } else {
       echo " $field ";
   }
}

checkFields($a);
checkFields($b);
?>
