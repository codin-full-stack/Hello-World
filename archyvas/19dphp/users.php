<?php include "header.php"; ?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<form>
<input class="mygtukas" style="border: none" type="button" onclick="location.href = 'index.php';" value="Back" />

</form>
<?php

// MySqL, atvaizduoja duomenis

$sql = "SELECT * FROM  users";
// padaro masyva???
$result = mysqli_query($connection, $sql);
// $result=$con->query($sql);
// užklausos įvykdymas
if($result = mysqli_query($connection, $sql)){
   // užklausos grąžinimas
   // grąţina iš duomenų bazės ištrauktų eilučių skaičių pagal užklausą
   if(mysqli_num_rows($result) > 0){
       echo "<table>";
       echo "<thead>";
       echo "<tr>";
               echo "<th>id</th>";
               echo "<th>vardas</th>";
               echo "<th>pavarde</th>";
               echo "<th>amzius</th>";
               echo "<th>lytis</th>";
               echo "<th>miestas</th>";
               echo "<th>el_pastas</th>";
               echo "<th>naujienos</th>";
               echo "<th>taisykles</th>";
               echo "<th>slaptazodis</th>";
           echo "</tr>";
       echo "</thead>";
       echo "<tbody>";
           // grąžinama viena EINAMOJI eilutė iš viso eilučių sąrašo
       while($row = mysqli_fetch_array($result)){
           echo "<tr>";
               echo "<td>" . $row['id'] . "</td>";
               echo "<td>" . $row['first_name'] . "</td>";
               echo "<td>" . $row['last_name'] . "</td>";
               echo "<td>" . $row['age'] . "</td>";
               echo "<td>" . $row['gender'] . "</td>";
               echo "<td>" . $row['city'] . "</td>";
               echo "<td>" . $row['email'] . "</td>";
               echo "<td>" . $row['news'] . "</td>";
               echo "<td>" . $row['rules'] . "</td>";
               echo "<td>" . $row['password'] . "</td>";

           echo "</tr>";
       }

       echo "</tbody>";

       echo "</table>";
       // Free result set
       mysqli_free_result($result);
   } else{
       echo "No records matching your query were found.";
   }
} else {
   echo "ERROR $sql. " . mysqli_error($connection);
}


?>

<br> <br>
<input class="mygtukas" style="border: none" type="button" onclick="location.href = 'index.php';" value="Back" />
