<?php

_d($_GET);

if (isset($_GET['color'])) {
    $color = $_GET['color'];
    echo '<body style="background-color: #'.($_GET['color']).';"></body>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02</title>
</head>
<body style="background-color: <?=$color?>;">
    <a href="./index.php">Link1</a>
    <a href="./index.php?color=ff1234">Link2</a>
</body>
</html>