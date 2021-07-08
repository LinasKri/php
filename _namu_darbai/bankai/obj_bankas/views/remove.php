  
<?php require DIR.'views/top.php' ?>

<form action="<?= URL ?>rem/<?= $id ?>" method="post">
    <input type="text" name="amount" value="">
    <button>Remove funds</button>
</form>

<?php require DIR.'views/bottom.php' ?>