<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
</head>
<body style="background-color: green;">
    <div style="background-color: aquamarine;">
        <?php include __DIR__.'/msg.php' ?>
    </div>
    <div style="background-color: coral;">
        <ul>
            <?php foreach ($accounts as $account) : ?>
                <li aria-readonly="id">Account holder: <?=ucfirst($account['name']), ' ' , ucfirst($account['surname']), ', AK: ' ,$account['IDCode']?><br> Account No. [<?= $account['id'] ?>] Account balance: <?= $account['funds'] ?>
                    [<a href="?action=add&id=<?= $account['id'] ?>">Add</a>]
                    [<a href="?action=rem&id=<?= $account['id'] ?>">Remove</a>]
                    <form action="?action=delete&id=<?= $account['id'] ?>" method="post">
                    <button type="submit">Delete acc</button>
                    </form><br>
                </li>
            <?php endforeach ?>
        </ul>
        <div style="background-color: gold;">
        <?php include __DIR__.'/menu.php' ?>
        </div>
    </div>   
</body>
</html>