<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Funds</title>
</head>
<body>
    <?php include __DIR__.'/menu.php' ?>
    <?php $id = $_GET['id'] ?? 0; ?>
    <form action="?action=rem&id=<?=$id?>" method="post">
        <input type="text" name="funds">
        <button>Remove funds</button>
    </form>
</body>
</html>