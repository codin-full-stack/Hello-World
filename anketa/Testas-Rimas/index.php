<?php include "config.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="action.php" method="POST">
    <div class="lentele">
        <div class="input-group">
            <label for="email"><b>EMAIL</b></label><br>
            <input type="email" placeholder="example@email.com" name="email" required><br>    
        </div>
        <div class="input-group">
            <label for="first_name"><b>Vardas</b></label><br>
            <input type="text" placeholder="Vardenis" name="first_name">                    
        </div>
        <div class="input-group">
            <label for="last_name"><b>Pavardė</b></label><br>
            <input type="text" placeholder="Pavardenis" name="last_name">
        </div> 
        <div class="input-group">
            <label for="age"><b>Amžius</b></label><br>
            <input type="number" placeholder="0" name="age" required>                                           
        </div>
        <div class="input-group">
            <label for="gender"><b>Lytis</b></label><br>
            <input type="radio" name="gender" value="Vyras" checked><b>Vyras</b>
            <input type="radio" name="gender" value="Moteris">Moteris                    
        </div>

        <div class="select-group">
            <label for="car"><b>Labiausiai patinkanti masinos marke:</b></label><br>
            <select name="car">
                <?php
                $car = [
                "kita"=>"Kita" ,   
                "audi"=>"Audi",
                "bmw"=>"BMW",
                "vw"=>"Volkswagen",
                "toyota"=>"Toyota",
                "opel"=>"Oplel",
                "volvo"=>"Volvo",
                "subaru"=>"Subaru",
                "toyota"=>"Toyota"
                ];
                foreach($car as $key=>$value){
                ?>
            <option value=<?php echo "$car[$key]"?>><?php echo "$value"?></option>
                <?php }
                ?>  
            </select><br>                    
        </div>
        <div class="input-group">
            <label for="driving"><b>Ar vairuojete automobili?</b></label><br>
            <input type="radio" name="driving" value="Yes" checked><b>Ne</b>
            <input type="radio" name="driving" value="No">Taip                    
        </div>
        <div class="input-group">
            <label for="checkbox"><b>Jeigu vairuojete</b></label><br>
            <input type="checkbox" name="road" value="Taip"> <b>Ar esate sugede kelyje?</b><br> 
            <input type="checkbox" name="repair" value="Taip"> <b>Ar taisote masina specializuotuose autoservisuose?</b><br>
            <input type="checkbox" name="like" value="Taip"> <b>Ar patenkinta/as savo masina?</b><br>                   
        </div>
        <div class="input-group2">
            <button type="submit" class="b">Pateikti</button>
        </div>
    </div>
</body>
</html>