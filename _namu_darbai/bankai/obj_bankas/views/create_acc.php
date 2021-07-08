<?php require DIR.'views/top.php'; ?>

<div style="background-color: gold;">
    <?php include DIR.'/menu.php' ?>
</div>

<form action="<?= URL ?>create-acc" method="post">
    <button>Add account</button>
</form>

<?php require DIR.'views/bottom.php'; ?>