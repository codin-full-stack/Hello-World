<div class="menu">
<a href="loginDB.php">Login</a>
<a href="logout.php">Logout</a>
<a href="search.php">Search</a>
<a href="users.php">Users</a>
<?php
$Json = file_get_contents("json.json");

$array = json_decode($Json, true);
$array = $array["menu"]["items"];

// var_dump($array);

foreach($array as $key => $value){
    // var_dump($value);
    if(! empty($value)) {
        ?>
            <a href="<?php echo $value["id"]; ?>">
                <?php 
                    if(! empty($value["label"])){
                    echo $value["label"];
                    } else {
                    }
                ?>
            </a>
        <?php
    }
}
?>
</div>