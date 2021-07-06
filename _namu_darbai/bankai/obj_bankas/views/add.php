<?php require DIR.'views/top.php'; ?>

<div style="background-color: coral; padding: 20px">
<?php 
// foreach ($accounts as $account) {
//     if ($account['id'] == $id) {
//         echo $account['name'], ' ' ,$account['surname'],'<br> Account balance: ', $account['funds'];
//     }
// }
?>
    <form action="?add/<?=$id?>" method="post">
        <input type="text" name="funds">
        <button>Add funds</button>
    </form>
</div>

<?php require DIR.'views/bottom.php'; ?>