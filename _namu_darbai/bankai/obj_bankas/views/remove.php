<?php require DIR.'views/top.php' ?>

<div style="background-color: coral; padding: 20px">
    Account No.:<?= $id ?>
    <form action="<?= URL ?>rem/<?= $id ?>" method="post">
        <input type="text" name="amount" value="">
        <button>Remove funds</button>
    </form>
</div>
<?php require DIR.'views/bottom.php' ?>