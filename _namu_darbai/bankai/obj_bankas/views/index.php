<?php require DIR.'views/top.php'; ?>

<?php foreach ($accounts as $account) : ?>
<div style="border: 2px solid black;"><br>
    <ul>
        Account holder: <?=ucfirst($account['name']), ' ' , ucfirst($account['surname']), '<br> AK: ' ,$account['IDCode']?><br> Account No. [<?= $account['id'] ?>]<br> Account balance: <?= $account['funds'] ?> €
        [<a href="?action=add&id=<?= $account['id'] ?>">Add</a>]
        [<a href="?action=rem&id=<?= $account['id'] ?>">Remove</a>]
        <form action="?action=delete&id=<?= $account['id'] ?>" method="post"><br>
        <button type="submit">Delete acc</button>
        </form><br>
    </div>
    <?php endforeach ?>
</ul>

<?php require DIR.'views/bottom.php'; ?>