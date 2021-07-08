<?php require DIR.'views/top.php' ?>

<div style="background-color: gold;">
    <?php include DIR.'/menu.php' ?>
</div>

<div style="background-color: coral; padding: 20px">
    <form action="<?= URL ?>add/<?= $id ?>" method="post">
        <input type="text" name="amount" value="">
        <button>Add funds<?= $id ?></button>
    </form>
</div>

<?php require DIR.'views/bottom.php' ?>
