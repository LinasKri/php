<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Account</title>
</head>
<body>
    <?php include __DIR__.'/menu.php' ?>
    <form action="?action=add-acc" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="surname" placeholder="Surname">
    <input type="text" name="IDCode" placeholder="ID code">
    <button>Add account</button>
    </form>
</body>
</html>