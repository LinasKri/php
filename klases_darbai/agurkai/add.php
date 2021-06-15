<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prideti agurkue</title>
</head>
<body>
    <?php include __DIR__.'/menu.php';?>

    <form action="?action=add-box" method="post">
    <input type="text" name="amount">
    <button>Prideti agurku</button>
    </form>
</body>
</html>