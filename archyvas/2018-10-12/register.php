<?php include "header.php"; ?>

 <form method="POST">
      <?php
        if  (empty($_POST)) {
        include "form.php";
       } else {
        include "action.php";
       };
      ?>
  </form>

<?php include "footer.php"; ?>