<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register PDO BBDD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php ROOT ?>view\assets\index.css">
</head>
<body>

    <form action="ControllerUser/register" method="post">
        <fieldset>
            <legend>Register</legend>
            <article>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">            
            </article>
            <article>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </article>
            <footer>
                <input type="submit" value="Register">
            </footer>
        </fieldset>
    </form>
    
</body>
</html>
