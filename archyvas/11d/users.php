<head>
    <link rel="stylesheet" href="style.css">
</head>
<form>
<input class="mygtukas" style="border: none" type="button" onclick="location.href = 'index.php';" value="Back" />

</form>
<?php
// C:/wamp/www/Rimas/ = __DIR__

$dir = __DIR__ . DIRECTORY_SEPARATOR . "jsonSaves" . DIRECTORY_SEPARATOR;
$files = scandir($dir);

foreach ($files as $key => $value) {
   $pos = strpos($value, ".json");

   if ($pos != false) {
       echo  "<br>" . $value . "<br>";
        $file = file_get_contents($dir . $value, FILE_USE_INCLUDE_PATH);
        $allInfo = json_decode($file, true);

        foreach ($allInfo as $key => $item) {
            if (!is_array($item)) {
                echo $key . ": " . $item . "<br/>" ;
            }
        }
    }
}
?>

<br> <br>
<input class="mygtukas" style="border: none" type="button" onclick="location.href = 'index.php';" value="Back" />
