<?php
require __DIR__.'/index.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['logged'])) {
        unset($_SESSION['logged'], $_SESSION['name']);
        setMessage('Ate'. $_SESSION['name']);
        header('Location: https://localhost/_php_/_namu_darbai/bankas/login.php');
        die;
    }

} else{
    $users = json_decode(file_get_contents(__DIR__.'/users.json'),1);
    foreach($users as $user){
        if ($user['name'] == $_POST['name']) {
            if ($user['pass'] == md5($_POST['pass'])) {
                $_SESSION['logged'] =1;
                $_SESSION['name'] = $user['name'];
                setMessage('Labas', $user['name']);
                header('Location: https://localhost/_php_/_namu_darbai/bankas/_namu_darbai/bankas/home.php');
                die;
            }
        }
    }
    setMessage('Netinka slaptazodis');
    header('Location: https://localhost/_php_/_namu_darbai/bankas/login.php');
    die;
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
    <?php include __DIR__.'/msg.php' ?>
    <?php include __DIR__.'/menu.php'?>
    <h1>Login</h1>
    <form action="" method="post">
        <input type="text" name="name" placeholder="User name">
        <input type="password" name="pass" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</body>
</html>