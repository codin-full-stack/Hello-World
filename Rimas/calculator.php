<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="calculator.css">
    <title>Calculator</title>
    <script src="calculator.js" async></script>
</head>
<body>
    <div class="calc-contain">
        <div class="calc-screen">
            <div class="calc-tabs">
                <a class="dot" style="background-color:blue;"></a>
                <a class="dot" style="background-color:yellow;"></a>
                <a class="dot" style="background-color:red;"></a>
            </div>
            <div class="calc-text">
            <input type="text" placeholder="0" name="screen" >
            </div>
        </div>
        <div class="calc-buttons">
            <a class="buttons-value">AC</a>
            <a class="buttons-value">+/-</a>
            <a class="buttons-value">%</a>
            <a class="buttons-value">/</a>
            <a type="number" data-value="9" class="buttons-value buttons-white">9</a>
            <a type="number" data-value="8" class="buttons-value buttons-white">8</a>
            <a type="number" data-value="7" class="buttons-value buttons-white">7</a>
            <a class="buttons-value">*</a>
            <a type="number" data-value="6" class="buttons-value buttons-white">6</a>
            <a type="number" data-value="5" class="buttons-value buttons-white">5</a>
            <a type="number" data-value="4" class="buttons-value buttons-white">4</a>
            <a class="buttons-value">-</a>
            <a type="number" data-value="3" class="buttons-value buttons-white">3</a>
            <a type="number" data-value="2" class="buttons-value buttons-white">2</a>
            <a type="number" data-value="1" class="buttons-value buttons-white">1</a>
            <a class="buttons-value">+</a>
            <a type="number" data-value="0" class="buttons-value buttons-white button-large">0</a>
            <a class="buttons-value">,</a>
            <a class="buttons-value">=</a>
        </div>
    </div>   
</body>
</html>