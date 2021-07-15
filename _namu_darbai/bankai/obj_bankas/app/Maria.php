<?php
namespace Bank;

use App\DB\DataBase;
use PDO;

// struktura ['id' => 58, 'count' => 14]

class Maria implements DataBase {

    private static $db;
    private $pdo;

    public static function getMaria() // singletono paternas
    {
        return self::$db ?? self::$db = new self;
    }

    private function __construct()
    {
        $host = '127.0.0.1';
        $db   = 'bankas';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $this->pdo = new PDO($dsn, $user, $pass, $options);
    }



    public function create(array $userData) : void
    {
        $sql =
        "INSERT INTO saskaitos (`count`)
        VALUES (0)";
        $this->pdo->query($sql);

    }
 
    public function update(int $userId, array $userData) : void
    {
        $sql =
        "UPDATE saskaitos
        SET `count` = ".$userData['amount']."
        WHERE id = $userId";


        $this->pdo->query($sql);
    }
 
    public function delete(int $userId) : void
    {
        $sql =
        "DELETE FROM saskaitos
        WHERE id = $userId";
        $this->pdo->query($sql);
    }
 
    public function show(int $userId) : array
    {
        $sql = 
        "SELECT id, `count` as amount
        FROM saskaitos
        WHERE id = $userId
        ";
        $stmt = $this->pdo->query($sql);
        $row = $stmt->fetch();
        return $row;

    }
    
    public function showAll() : array {
        $sql = 
        "SELECT id, `count` as amount
        FROM saskaitos
        ";
        $all = [];
        $stmt = $this->pdo->query($sql);
        while ($row = $stmt->fetch())
        {
            $all[] = $row;
        }
        return $all;
    }


    public function getUser(string $name, string $pass) : array
    {
        $sql = 
        "SELECT *
        FROM users
        WHERE name = ? AND pass = ?
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$name, $pass]);
        $user = $stmt->fetch();
        return false === $user ? [] : $user;
    }

    public function getCount(int $amount) : bool
    {
        $sql = 
        "SELECT *
        FROM saskaitos
        WHERE count = ?
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$amount]);
        $box = $stmt->fetch();
        return false === $box ? true : false;
    }


}