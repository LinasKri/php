<?php require DIR.'views/top.php' ?>

<div style="background-color: gold; margin-bottom: 15px">
    <h1>ALIEN BANK👽💰</h1>
    <?php include DIR.'/menu.php' ?>
</div>

<div style="background-color: khaki; padding: 20px">
    Account No.:<?= $id ?>
    <form action="<?= URL ?>rem/<?= $id ?>" method="post">
        <input type="text" name="amount" value="">
        <button>Remove funds</button>
    </form>
</div>
<?php require DIR.'views/bottom.php' ?>