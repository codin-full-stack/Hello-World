<?php
// var_dump($_POST);

$num1 = $_POST["n1"];
$num2 = $_POST["n2"];
$cal = $_POST["zenklas"];

    function calculate($n1,$n2,$calcu)
    {
        switch($calcu)
        {
        case '+':
            $a = $n1 + $n2;
            return round ($a,3);
        case '-':
            $a = $n1 - $n2; 
            return round ($a,3);
        case '*':
            $a = $n1 * $n2; 
            return round ($a,3);
        case '/':
            $a = $n1 / $n2; 
            return round ($a,3);
        }
    }
echo "Answer is:" .calculate($num1,$num2,$cal);
?>
