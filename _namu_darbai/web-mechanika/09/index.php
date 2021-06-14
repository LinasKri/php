<?php
    $letters = range('A','J');
    $count = rand(3,10);

    // _d($letters);
    // _d($_POST); // $_POST['let] == ['D', 'F']

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $color = 'white';
        $form = 'false';
    }else {
        $color = 'black';
        $form = 'true';
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09</title>
</head>
<body style="background-color: <?=$color?>;">

    <a href="">Back</a>

    <?php if($form) : ?>
        <form action="" method="post">
        <input type="hidden" name="count" value="<?= $count?>">
        <?php foreach($letters as $letter) : ?>
        <label><?= $letter?></label>
        <input type="checkbox" name="let[]" value="<?= $letter?>" id="">
        <?php if(--$count === 0) break?>
        <?php endforeach ?>
        <button type="submit">Calc</button>
        </form>
    <?php else: ?>
            sugeneruota: <?=$_POST['count']?><br>
            suskaiciuosta: <?= count($_POST['let'] ?? [])?><br>
    <?php endif?>

</body>
</html>