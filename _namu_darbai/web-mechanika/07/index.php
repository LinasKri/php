
<?php

_d($_SERVER['REQUEST_METHOD']);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $color = 'green';
}elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $color = 'yellow';
    header('Location: ./index.php');
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07</title>
</head>

<body style="background-color: <?=$color?>;">

    <form action="" method="get">
        <button type="submit">GET </button>
    </form>

    <form action="" method="post">
        <button type="submit">POST</button>
    </form>

</body>
</html>