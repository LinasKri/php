<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agurku gamykla</title>
</head>
<body>
    <?php include __DIR__.'/menu.php'?>

    <ul>
        <?php foreach($boxes as $box) : ?>
        <li> Dezes Nr. <?= $box['id'] ?>, Viso agurku  <?= $box['amount'] ?> 
        [<a href="?action?=add&id=<?= $box['id'] ?>"></a>]
        </li>
        <?php endforeach ?>
    </ul>
</body>
</html>