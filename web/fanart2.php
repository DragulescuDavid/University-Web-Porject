<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="f2style.css">
    <title>Log In</title>
</head>
<body>
            <?php include "header.php"?>
           <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username or email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="login-submit">Login</button>
           </form>
           <a href="signup.php" style="text-decoration:none">Sign Up</a>
</body>
</html>