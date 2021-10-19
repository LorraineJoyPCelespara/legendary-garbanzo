<?php
// set cookies
    if(isset($_POST['submit'])){
        $ok = htmlentities($_POST['username']);
        setcookie('auth', $ok, time()+3600);
        header('Location: loggedin.php');
        exit;}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <form action="loggedin.php" method="POST">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" value="Log Me In">
    </form>
</body>
</html>