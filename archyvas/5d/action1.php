<?php
// var_dump($_POST);

$x=$_POST["n1"];
$y=$_POST["n2"];
$calc=$_POST["zenklas"];

function calculate($a, $z, $b ){
    $c = $a . $z . $b . "=";
    eval('$c .= round('. $a . $z . $b .', 3);');
    // eval('$c .= 1/7;');
    // eval vercia funkcija i koda todel apvalint neiseis, todel reikia apvalint(round) kode
    // $c .= 1/7;
    // $c .= $a . $z . $b;

    var_dump($c);

    return $c;
}

echo calculate ($x, $calc, $y);

// tasko naudojimas norint sujungi kintamojo reiksmes
$k = 'labas';
$k .= 'vakaras';
// >> labas vakaras
// tasko naudojimas pries lygybes zenkla yra lygiai tas pats kaip cia:
$k = 'labas';
$k = $k . 'vakaras';
// >> labas vakaras