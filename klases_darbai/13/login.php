<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // 1. Rodyti forma

} else {
    // 1. Tikrinti duomenis

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php include __DIR__.'/menu.php'?>
    <h1>Login</h1>
    <form action="https://localhost/_php_/klases_darbai/13/login.php" method="post"></form>
    <input type="text" name="name">
    <input type="password" name="pass">
    <button type="submit">Login</button>
</body>
</html>