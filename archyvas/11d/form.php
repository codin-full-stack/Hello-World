<form class="duomenys" action="action.php" method="POST">
      Vardas:<br>
      <input type="text" name="first_name" value=""><br>
      Pavarde:<br>
      <input type="text" name="last_name" value=""><br>
      Amzius:<br>
      <input type="number" name="age" value=""><br>
      <input type="radio" name="gender" value="Vyras"> Vyras
      <input type="radio" name="gender" value="Moteris"> Moteris<br>
      Miestas:<br>
      <?php include "cities.php" ?>
      Pasto adresas:<br>
      <input type="email" name="email" value=""><br>
      <input type="checkbox" name="news" value="Taip"> Gauti naujienas email.<br>
      <input type="checkbox" name="rules" value="Sutinku"> Sutinku su taisyklemis.
      <br><br>
      <input class="mygtukas" style="border: none" type="submit" value="Submit">
</form>
