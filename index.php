<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/png" href="img/pole.png" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Login</title>
</head>

<body class="inBody">
    <header>
        <a href="index.php">
            <h1>STYLE STATION</h1>
            <h2>ברוכים הבאים לסביבת העבודה של המחר</h2>
        </a>

    </header>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <div class="form-field">
            <label for="email">Email</label>
            <input type="email" class="text-field" name="email" id="email" required>
        </div>
        <div class="form-field">
            <label for="password">Password</label>
            <input type="password" class="text-field" name="password" id="password" required>
        </div>
        <div class="button-container">
            <input type="submit" class="button form-button" value="Login">
        </div>
    </form>
    <div>
        <p>Don't Have An Accoun Yet? Click <a href="sign-up.html" class="link">Here</a> To Sign Up.</p>
    </div>
</body>

</html>