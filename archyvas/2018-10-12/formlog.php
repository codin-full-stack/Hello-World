<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="POST">
        <div class="board">
            <div class="tabs">
                <button type="button">Login</button>
                <button type="button" onclick="location.href = 'register.php';" class="grey">Register</button>
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
                </div>
            </div>
            <div class="signin">
                <div class="input-group2">
                    <button type="button" onclick="location.href = 'index.php';" class="a">Forgot password?</button>
                </div>    
                <div class="input-group2">
                    <button type="submit" class="b">Signin</button>
                </div>
            </div>
        </div>   
    </form>
</body>
</html>