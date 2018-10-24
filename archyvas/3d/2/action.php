<?php
// var_dump($_POST);

$x=$_POST["nr1"];

eval ('$x = '.$_POST["nr1"].';');

echo round($x,2);
?>