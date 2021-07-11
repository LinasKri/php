<?php require DIR.'views/top.php' ?>

<div style="background-color: gold; margin-bottom: 15px">
    <h1>ALIEN BANK👽💰</h1>
    <?php include DIR.'/menu.php' ?>
</div>

<div style="background-color: khaki; padding: 20px;">
    Account No.: <?= $id ?><br>
    <form action="<?= URL ?>add/<?= $id ?>" method="post">
        <input type="text" name="amount" value="">
        <button>Add funds</button>
    </form>
</div>

<?php require DIR.'views/bottom.php' ?>






    <!-- Account holder: <?= $name ?> <?= $surname ?> <br>
    Perssonal ID: <?= $account['idCode'] ?> <br>
    IBAN: <?= $account['iban'] ?><br>
    Account balance: <?= $amount ?><br> -->