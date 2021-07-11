<?php require DIR.'views/top.php' ?>

<div style="background-color: gold;">
    ALIEN BANK👽💰<?php include DIR.'/menu.php' ?>
</div>

<div style="background-color: coral; padding: 20px">
Account No.: <?= $id ?><br>
<!-- Account holder: <?= $account['name'] ?> <?= $account['surname'] ?> <br> -->
<!-- Perssonal ID: <?= $account['idCode'] ?> <br>
IBAN: <?= $account['iban'] ?><br>
Account balance: <?= $account['amount'] ?><br> -->
    <form action="<?= URL ?>add/<?= $id ?>" method="post">
        <input type="text" name="amount" value="">
        <button>Add funds</button>
    </form>
</div>

<?php require DIR.'views/bottom.php' ?>
