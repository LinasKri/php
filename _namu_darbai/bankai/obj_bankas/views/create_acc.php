<?php require DIR.'views/top.php'; ?>

<?php $iban = 'LT01 '.rand(1000000000000000, 9999999999999999); ?>

<form action="<?= URL ?>create-acc" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="surname" placeholder="Surname">
    <input type="text" name="IDCode" placeholder="ID code"><br>
    <input type="text" name="id" value="<?=$iban?>" readonly><br><br>
    <button>Add account</button>
</form>

<?php require DIR.'views/bottom.php'; ?>