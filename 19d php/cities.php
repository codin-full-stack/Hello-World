<select name="city">
        <?php
        $cities = [
        "vln"=>"Vilnius",
        "kns"=>"Kaunas",
        "klp"=>"Klaipeda",
        "siau"=>"Siauliai"
        ];
        foreach($cities as $key=>$value){
        ?>
    <option value=<?php echo "$cities[$key]"?>><?php echo "$value"?></option>
        <?php }
        ?>  
</select><br>