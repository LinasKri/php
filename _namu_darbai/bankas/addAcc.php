<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Account</title>
</head>
<body style="background-color: green;">
    <div style="background-color: gold;">
        <?php include __DIR__.'/menu.php' ?>
    </div>
    <div style="background-color: aquamarine;">
        <?php include __DIR__.'/msg.php' ?>
    </div><br>
    <div style="background-color: coral; padding: 30px; ">
        <form action="?action=add-acc" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="surname" placeholder="Surname">
            <input type="text" name="IDCode" placeholder="ID code"><br>
            
            <input type="text" name="id" urldecode="id" readonly><br>
            
            <button>Add account</button>
        </form>
    </div>
</body>
</html>