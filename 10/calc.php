
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skaiciuotuvas</title>
</head>
<body>
<h1>Skaiciuotuvas</h1>
<form action="" method="get">
X: <input type="text" name="x"><br>
Y: <input type="text" name="y"><br>
<button type="submit">Sumuoti</button>
</form>

<?php

if (!empty($_GET)) {
    echo '<h3 style="color:blue;"> '.( $_GET['x']+$_GET['y']).'</h3>'?? 0;
}else{
    echo 'reikia dvieju skaiciu';
}

?>


</body>
</html>