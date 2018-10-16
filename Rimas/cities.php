<select name="city">
        <?php
        $cities = [
        "psr"=>"Pasirink",
        "vln"=>"Vilnius",
        "kns"=>"Kaunas",
        "klp"=>"Klaipeda",
        "siau"=>"Siauliai",
        "kt"=>"Kitas"
        ];
        foreach($cities as $key=>$value){
        ?>
    <option value=<?php echo "$cities[$key]"?>><?php echo "$value"?></option>
        <?php }
        ?>  
</select><br>