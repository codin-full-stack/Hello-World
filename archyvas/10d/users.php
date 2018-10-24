<?php
$users = [
    1 => [
        "first_name"    => "Rimas",
        "last_name"     => "Skendelis",
        "age"           => "26",
        "gender"        => "Vyras",
        "city"          => [
            "name"           => "Vilnius",
            "tel_code"           => "852"
        ],
    ],
    2 => [
        "first_name"    => "Vardenis",
        "last_name"     => "Pavardenis",
        "age"           => "99",
        "gender"        => "Vyras",
        "city"          => "Kaunas"
    ],
    3 => [
        "first_name"    => "Ona",
        "last_name"     => "Onaite",
        "age"           => "40",
        "gender"        => "Moteris",
        "city"          => "Klaipeda"
    ]
];
foreach($users as $key => $value) {
    echo "<br><br>Vartotojo ID: " . $key . "<br>" . "<br>";
    foreach ($value as $key2 => $value2) {
        if (is_array($value2))
            foreach ($value2 as $key3 => $value3) {
                echo $key2 . ":" . "<br>" . $key3 . ": " . $value3 ."<br>" . "<br>";
        } else {
                echo $key2 . ": " . $value2 . "<br>" . "<br>";
        }
    }
}
// var_dump($users);
?>