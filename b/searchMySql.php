<?php
include 'header.php';
?>   

<div class="users">
    <?php
        if (!empty ($_POST)) {

            $userInfo = 'SELECT * FROM users WHERE email = "' . $_POST['email'] . '"';

            var_dump($userInfo);
        }
    ?>

<?php
include 'footer.php';
?>