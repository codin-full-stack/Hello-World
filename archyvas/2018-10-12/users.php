<?php include "header.php";
$sql = "SELECT first_name, last_name, age, city, email FROM users";
$result = mysqli_query($connection, $sql);
?>
<div class="usertable">
<div style="overflow-x:auto;">
<table>
    <thead>
        <tr>
            <th>Full name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Location</th>
        </tr>
    </thead>
    <tbody>
    <?php if (mysqli_num_rows($result) > 0) { ?>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['first_name'] . " " . $row['last_name']?></td>
                    <td><?php echo $row['age']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['city']?></td>
                    <?php } ?>
                </tr>
    <?php } else { ?>
        <tr><td colspan="4">Rezultatu nera</td></tr>
    <?php } ?>
    </tbody>
</table>
    </div>
</div>

<?php include "footer.php"; ?>