<?php

$host = '127.0.0.1';
$db   = 'pewpew';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);

// seeder
$techno = [
    ['Berzas', rand(1, 1500)/100, 1],
    ['Egle', rand(1, 1500)/100, 2],
    ['Pusis', rand(1, 1500)/100, 2],
    ['Kedras', rand(1, 1500)/100, 2],
    ['Palme', rand(1, 1500)/100, 3],
    ['Agrastas', rand(1, 1500)/100, 2],
    ['Sermusksnis', rand(1, 1500)/100, 1],
    ['Kastonas', rand(1, 1500)/100, 1],
];
$num = rand(0, count($techno)-1);
// irasumas
// INSERT INTO table_name (column1, column2, column3,...)
// VALUES (value1, value2, value3, ... )

$sql = "INSERT INTO techno (`name`,height, `type`)
VALUES ('".$techno[$num][0]."', ".$techno[$num][1].", ".$techno[$num][2].")
";
$pdo->query($sql);

// Skaitymas

// SELECT column1, column2, column3,.. FROM table_name 

$sql = "SELECT id, name, height, type
FROM techno
WHERE (`type` <> 2 AND height > 10) OR (`type` = 1 AND height > 10) OR `type` = 3
ORDER BY `name` DESC
-- LIMIT 5
";

$stmt = $pdo->query($sql); // DB steitmentas

while ($row = $stmt->fetch()) // duok man viena eilute
{
    echo $row['id'] .' '. $row['name'].' '. $row['height'].' '. $row['type'].'<br>';
}

// Redagavimas
// UPDATE table_name
// SELECT column1, column2, column3,..

$sql = "UPDATE techno
SET height = 69, `name` = ' Didelis Berzas'
WHERE `name` = 'Berzas'
";

$pdo->query($sql);

//Trinimas
// DELETE FROM table_name
// WHERE some_column =  some_value

$sql = "DELETE FROM techno
WHERE id = 30 OR 1
";
$pdo->query($sql);