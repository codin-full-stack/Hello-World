<?php
// var_dump($_GET);

$a=$_GET["name1"];
$b=$_GET["name2"];


if (empty($a) && !empty($b)) {
    echo "Vardas: nera";
    echo "<br>";
} elseif (empty($a) && empty($b)) {
} else {
    echo "Vardas: " .$a;
    echo "<br>";
}
if (empty($b) && !empty($a)) {
    echo "Pavarde: nera";
    echo "<br>";
} elseif (empty($b) && empty($a)) {
} else {
    echo "Pavarde: " .$b;
    echo "<br>";
}
if (empty($a) && empty($b)){
    echo  "Klaida! Neužpildyti laukai";
 } else {
    echo "";
}
?>