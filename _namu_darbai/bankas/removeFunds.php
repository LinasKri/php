<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Funds</title>
</head>
<body>
    <?php $id = $_GET['id'] ?? 0; ?>
    <?php 
    foreach ($accounts as $account) {
        if ($account['id'] == $id) {
            echo $account['name'], ' ' ,$account['surname'],'<br> Account balance: ', $account['funds'];
        }
    }
    ?>
    <form action="?action=rem&id=<?=$id?>" method="post">
        <input type="text" name="funds">
        <button>Remove funds</button>
    </form>
</body>
</html>