<?php

require_once __DIR__ . '/../../../env.php';

class Query extends PDO
{
    public static function pdo()
    {
        $pdo = new PDO(DNS, USERNAME, PWD, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);
        return $pdo;
    }
}
