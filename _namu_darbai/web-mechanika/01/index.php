<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
    <style>
    body{
        background-color: black;
    }
    a{
        color: white;
    }
    </style>
</head>
<body>
    <a href="./"><h2>WEB 01</h2></a>
    <a href="?color=1"><h2>WEB 01 +</h2></a>
</body>
</html>

<?php
if ($_GET['color'] == '1')
{
    echo '<style>
    body{
        background-color: red;
    }
    a{
        color: black;
    }
    </style>';
}