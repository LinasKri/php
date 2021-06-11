
<?php

_d($_GET);
$aColor = 'white';
$color = 'black';
if (isset($_GET['color'])) {
    $color = 'red';
    $aColor = 'yellow';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
</head>
<body style="background-color: <?=$color?>;">
    <a style="color: <?=$aColor?>;" href="./index.php"><h2>Black</h2></a>
    <a style="color: <?=$aColor?>;" href="./index.php?color=1"><h2>Red</h2></a>
</body>
</html>

