<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
</head>
<body style="background-color: green;">
    <h1>Welcome to Admin section</h1>
    <div style="background-color: aquamarine;">
        <?php include __DIR__.'/msg.php' ?>
    </div>
    <div style="background-color: coral;">
            <div style="background-color: gold;">
                <?php include __DIR__.'/menu.php' ?>
            </div>
        <?php
            usort($accounts, function($a, $b){
                return $a['surname'] <=> $b['surname'];
            });
        ?>
        <?php foreach ($accounts as $account) : ?>
        <div style="border: 2px solid black;"><br>
        <ul>
            Account holder: <?=ucfirst($account['name']), ' ' , ucfirst($account['surname']), '<br> AK: ' ,$account['IDCode']?><br> Account No. [<?= $account['id'] ?>]<br> Account balance: <?= $account['funds'] ?> €
            [<a href="?action=add&id=<?= $account['id'] ?>">Add</a>]
            [<a href="?action=rem&id=<?= $account['id'] ?>">Remove</a>]
            <form action="?action=delete&id=<?= $account['id'] ?>" method="post"><br>
            <button type="submit">Delete acc</button>
            </form><br>
        </div>
        <?php endforeach ?>
        </ul>
    </div>   
</body>
</html>