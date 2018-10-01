<?php
$A = $_POST["A"];
$B = $_POST["B"];
$C = $_POST["C"];

$array=[
    "A"=>"$A",
    "B"=>"$B",
    "C"=>"$C"
];
foreach($array as $Key=>$item){
// var_dump($item);
echo $item . "<br>";
}
?>