<?php require DIR.'views/top.php' ?>

<div style="background-color: gold;">
    <?php include DIR.'/menu.php' ?>
</div>
<ul>
    <?php foreach($accounts as $account) : ?>
        <div style="border: 2px solid black; background-color: coral;;"><br>
            <li>
                Account No. <?= $account['id'] ?> Account balance: <?= $account['amount'] ?>
                [<a href="<?= URL ?>add/<?= $account['id'] ?>">Add</a>]
                [<a href="<?= URL ?>rem/<?= $account['id'] ?>">Remove</a>]
                <form action="<?= URL ?>delete/<?= $account['id'] ?>" method="post">
                <button type="submit">Delete acc</button>
                </form>
        </div>
            </li>
    <?php endforeach ?>
</ul>
<?php require DIR.'views/bottom.php' ?>