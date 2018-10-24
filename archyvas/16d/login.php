<?php include "header.php"; ?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<div class="search">
    <form action="" method="POST">
      <br>Vardas:<br>
      <input type="text" name="first_name" value=""><br>
      Pavarde:<br>
      <input type="text" name="last_name" value=""><br>
      <br>Password:<br>
      <input type="password" name="password" value=""><br>
      <input class="mygtukas" style="border: none" name="submit" type="submit" value="Submit">
      <input class="mygtukas" style="border: none" type="button" onclick="location.href = 'index.php';" value="Back" />      
    </form>
</div>

<?php

if (!empty($_POST)) {

    $fileSaves = "jsonSaves" . DIRECTORY_SEPARATOR . $_POST["first_name"] . "_" . $_POST["last_name"] .".json";
    if(file_exists($fileSaves)) {
        $info = file_get_contents($fileSaves);
        $array = json_decode($info, true);
            if (md5($_POST["password"]) == $array["password"]) {
                foreach ($array as $key => $value) {
                    if(!empty($value)) {
                        echo $key . ": " . $value . "<br>"; 
                    }
                }
            } else {
                echo "Vartotojas rastas"  . "<br>" . "Neatitinka slaptazodis";
            }
            
    } else {
        echo "Tokio vartotojo nera";
    }
}
            

if (isset($_POST["submit"])) {
    if ($_POST["first_name"] == $array["first_name"] && $_POST["last_name"] == $array["last_name"] && md5($_POST["password"]) == $array["password"] ){
        $_SESSION["first_name"] = $_POST["first_name"];
        $_SESSION["last_name"] = $_POST["last_name"];
        $_SESSION["password"] = md5($_POST["password"]);
    } 
}

?>