<?php require DIR.'views/top.php'; ?>

<div style="background-color: gold;">
    <?php include DIR.'/menu.php' ?>
</div>

<?php $iban = 'LT01 '.rand(1000000000000000, 9999999999999999); ?>

<div style="background-color: coral; padding: 20px">
    <form action="<?= URL ?>create-acc" method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="surname" placeholder="Surname">
        <input type="text" name="idCode" placeholder="ID Code">
        <input type="text" name="iban" value="<?=$iban?>" readonly><br>
        <button>Add account</button>
    </form>
</div>
<?php require DIR.'views/bottom.php'; ?>