<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // 1. Rodyti forma

} else {
    // 2. Tikrinti duomenis
    $users = json_decode(file_get_contents(__DIR__.'/users.json'), 1);
    foreach($users as $user) {
        if ($user['name'] == $_POST['name']) {
            if ($user['pass'] == md5($_POST['pass'])) {
                $_SESSION['logged'] = 1;
                $_SESSION['name'] = $user['name'];
                header('Location: http://localhost/_php_/klases_darbai/13/member.php');
                die;
            }
        }
    }
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
    <form action="https://localhost/_php_/klases_darbai/13/login.php" method="post">
        <input type="text" name="name">
        <input type="password" name="pass">
        <button type="submit">Login</button>
    </form>
</body>
</html>