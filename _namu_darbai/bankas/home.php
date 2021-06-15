<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Account</title>
</head>
<body>
    <?php include __DIR__.'/menu.php' ?>
    <ul>
        <?php foreach ($accounts as $account) : ?>
            <li>Account No. [<?= $account['id'] ?>] Account balance: <?= $account['funds'] ?>
            [<a href="?action=add&id=<?= $account['id'] ?>">Add</a>]
            [<a href="?action=rem&id=<?= $account['id'] ?>">Remove</a>]
            <form action="?action=delete&id=<?= $account['id'] ?>" method="post">
            <button type="submit">Delete acc</button>
            </form>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>