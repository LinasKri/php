<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Funds</title>
</head>
<body>
    <?php include __DIR__.'/menu.php' ?>
    <form action="?action=add" method="post">
        <input type="text" name="funds">
        <button>Add funds</button>
    </form>
</body>
</html>