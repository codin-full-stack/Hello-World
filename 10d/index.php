<?php
var_dump($_POST);
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rimas</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="viduriai">
  <div class="menu">
  <?php
  include "json.label.php";
  ?>
</div>

  <form method="POST">
    <div class="lentele">
      <?php
        if  (empty($_POST)) {
        include "form.php";
       } else {
        include "action.php";
       };
      ?>
    </div>
  </form>
</div>
</body>
</html>