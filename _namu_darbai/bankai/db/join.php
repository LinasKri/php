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


/*
INNER JOIN

SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name = table2.column_name;
*/

$sql = "SELECT *
FROM clients
INNER JOIN phones
ON clients.id = phones.client_id
";

$stmt = $pdo->query($sql); // DB steitmentas

while ($row = $stmt->fetch()) // duok man viena eilute
{
    echo $row['id'] .' '. $row['name'].' '. $row['number'].'<br>';
}

echo '-----------------------------------------------------------------<br>';

/*
LEFT JOIN

SELECT column_name(s)
FROM table1
LEFT JOIN table2
ON table1.column_name = table2.column_name;
*/

$sql = "SELECT `name`, `number`, clients.id as cid, phones.id as pid
FROM clients
LEFT JOIN phones
ON clients.id = phones.client_id
";

$stmt = $pdo->query($sql); // DB steitmentas

while ($row = $stmt->fetch()) // duok man viena eilute
{
    echo 'Client id: ' . $row['cid'] .' '. $row['name'].', Phone id: '. $row['pid'] .' '. $row['number'].'<br>';
}

echo '-----------------------------------------------------------------<br>';

/*
RIGHT JOIN

SELECT column_name(s)
FROM table1
RIGHT JOIN table2
ON table1.column_name = table2.column_name;
*/

$sql = "SELECT `name`, `number`, clients.id as cid, phones.id as pid
FROM clients
RIGHT JOIN phones
ON clients.id = phones.client_id
ORDER BY clients.name
";

$stmt = $pdo->query($sql); // DB steitmentas

while ($row = $stmt->fetch()) // duok man viena eilute
{
    echo 'Client id: ' . $row['cid'] .' '. $row['name'].', Phone id: '. $row['pid'] .' '. $row['number'].'<br>';
}