<?php include "header.php"; ?>

<form action="" method="POST">
<div class="board">
    <div class="container">
        <div class="field">
            <div class="input-group">
                <label for="first_name"><b>VARDAS</b></label><br>
                <input type="text" placeholder="Vardenis" name="first_name" required><br>    
            </div>
            <div class="input-group">
                <label for="last_name"><b>PAVARDĖ</b></label><br>
                <input type="text" placeholder="Pavardenis" name="last_name" required>                    
            </div>
        </div>
    </div> 
        <div class="signin">
            <div class="input-group2">
                <button type="button" onclick="location.href = 'index.php';" class="a">Home</button>
            </div>    
            <div class="input-group2">
                <button type="submit" class="b">Search</button>
            </div>
        </div>
    </div>   
</form>


<?php

if (! empty($_POST)) {
    $sql = "SELECT * FROM users WHERE first_name = '" . $_POST['first_name'] . "' && last_name = '" . $_POST['last_name'] . "' LIMIT 1";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
    if(! empty($row)) {
        echo "Email: " . $row["email"] . "<br>";
        echo "Age: " . $row["age"] . "<br>";
        echo "Gender: " . $row["gender"] . "<br>";
        echo "City: " . $row["city"] . "<br>";
        echo "News: " . $row["news"] . "<br>";
    }
}

// if (!empty($_POST)) {

// $fileSaves = "jsonSaves" . DIRECTORY_SEPARATOR . $_POST["first_name"] . "_" . $_POST["last_name"] .".json";

// if(file_exists($fileSaves)) {
// var_dump($fileSaves);

// $info = file_get_contents($fileSaves);
// $array = json_decode($info, true);

// foreach ($array as $key => $value) {
//     if(!empty($value)) {
//     echo $key . ": " . $value . "<br>";
//             }
//         }
//     } else {
//         echo "Vartotojas nerastas";
//     }
// }




// if (!empty($_POST)) {
//     $fileSaves =file_exists("jsonSaves/") . DIRECTORY_SEPARATOR . $_POST["first_name"] . "_" . $_POST["last_name"] .".json";
//     $myJson = json_encode($_POST, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
//     file_put_contents(urlencode($fileSaves), $myJson);
//     $yourJson = file_get_contents(urlencode($fileSaves));
//     $json = json_decode($yourJson, true);
//     foreach ($json as $key => $value) {
//         if (!is_array($value)) {
//             echo $key . ": " . $value . "<br/>";
//         } else {
//             foreach ($value as $key2 => $value2) {
//                 echo $key2 . ": " . $value2 . "<br/>";
//             }
//         }
//     }
//  }


// $array = [
//     "first_name"    => "Vardas",
//     "last_name"     => "Pavarde",
//     "age"           => "Amzius",
//     "gender"        => "Lytis",
//     "city"          => "Miestas",
//     "email"         => "Pasto adresas",
//     "news"          => "Naujienos",
//     "rules"         => "Taisykles"
// ];

// if (file_exists($file)) {
//     foreach($array as $key => $value);
//         echo $key . $value;
//     } else {
//         echo "Klaida!";
// }

// file_get_contents($_POST, $fileSaves);

// $array = json_decode($file, true);

// foreach($array as $key => $value){
//     echo $key . ": " . $value . "<br>";
// }
?>
<?php include "footer.php"; ?>