<form action="action.php" method="POST">
    <div class="board">
        <div class="tabs">
            <button type="button" onclick="location.href = 'loginDB.php';" class="grey">Login</button>
            <button type="button">Register</button>
        </div>
        <div class="container">
            <div class="field">
                  <div class="input-group">
                        <label for="email"><b>EMAIL</b></label><br>
                        <input type="email" placeholder="example@email.com" name="email" required><br>    
                  </div>
                  <div class="input-group">
                        <label for="password"><b>PASSWORD</b></label><br>
                        <input type="password" placeholder="**********" name="password" required>                    
                  </div>
                  <div class="input-group">
                        <label for="passwordConfig"><b>REPEAT PASSWORD</b></label><br>
                        <input type="password" placeholder="**********" name="passwordConfig" required>                    
                  </div>
                  <div class="input-group">
                        <label for="first_name"><b>Vardas</b></label><br>
                        <input type="text" placeholder="Vardenis" name="first_name" required>                    
                  </div>
                  <div class="input-group">
                        <label for="last_name"><b>Pavardė</b></label><br>
                        <input type="text" placeholder="Pavardenis" name="last_name" required>                    
                  </div>
                  <div class="input-group">
                        <label for="age"><b>Amžius</b></label><br>
                        <input type="number" placeholder="0" name="age" required>                    
                  </div>
            </div>
            <div class="fieldradio">
                  <div class="input-group">
                        <label for="gender"><b>Lytis</b></label><br>
                        <input type="radio" name="gender" value="Vyras" checked><b>Vyras</b>
                        <input type="radio" name="gender" value="Moteris">Moteris                    
                  </div>
            </div>
            <div class="select-group">
                  <label for="city"><b>Miestas</b></label><br>
                  <?php include "cities.php" ?>                    
            </div>
            <div class="input-group">
                  <label for="news"><b>Naujienos</b></label>
                  <input type="checkbox" name="news" value="Taip" checked>                    
            </div>
            <div class="input-group">
                  <label for="rules"><b>Taisyklės</b></label>
                  <input type="checkbox" name="rules" value="Sutinku">                    
            </div>            
        </div>
            <div class="signin">
                  <div class="input-group2">
                  <button type="button" class="terms-privacy">Terms & Privacy.</button>
                  </div>    
                  <div class="input-group2">
                  <button type="submit" class="b">Register</button>
                  </div>
            </div>
    </div>  
</form>