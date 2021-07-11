<?php require DIR.'views/top.php' ?>

<div style="background-color: gold;">
    <h1>ALIEN BANK👽💰</h1>
    <?php include DIR.'/menu.php' ?>
</div>
<ul>
    <?php foreach($accounts as $account) : ?>
        <div style="border: 2px solid black; background-color:khaki;margin-top: 15px; margin-right: 40px; padding: 10px;">
            Account No.: <?= $account['id'] ?> <br>
            Account holder: <?= ucfirst($account['name']) ?> <?= ucfirst($account['surname']) ?> <br>
            Perssonal ID: <?= $account['idCode'] ?> <br>
            IBAN: <?= $account['iban'] ?><br>
            Account balance: <?= $account['amount'] ?><br>
            [<a href="<?= URL ?>add/<?= $account['id'] ?>">Add funds</a>]
            [<a href="<?= URL ?>rem/<?= $account['id'] ?>">Remove funds</a>]
            <form action="<?= URL ?>delete/<?= $account['id'] ?>" method="post">
            <button type="submit">Delete acc</button>
            </form>
        </div>
    <?php endforeach ?>
</ul>
<?php require DIR.'views/bottom.php' ?>