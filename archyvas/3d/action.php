<?php
// var_dump($_POST);

$x=$_POST["n1"];
$y=$_POST["n2"];
$calculate=$_POST["zenklas"];

echo "Answer: " . "$x $calculate $y" . " = ";

switch ($calculate) {
    case "+":
        echo round (($x+$y),4);
        break;
    case "-";
        echo round (($x-$y),4);
        break;
    case "*":
        echo round (($x*$y),4);
        break;
    case "/";
        echo round (($x/$y),4);
        break;
};
?>