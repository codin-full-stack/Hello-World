<?php
$A = $_POST["A"];
$B = $_POST["B"];
$C = $_POST["C"];
$D = $_POST["D"];

$array=[
    "Vardas: "=>"$A",
    "Pavarde: "=>"$B",
    "Amzius: "=>"$C",
    "Miestas: "=>"$D"
];
foreach($array as $Key=>$item){
// var_dump($item);
echo $Key .$item . "<br>";
}
?>