<?php
class Database
{
    private const DBHOST = 'localhost';
    private const DBUSER = 'root';
    private const DBPASS =  '';
    private const DBNAME = 'oop';
    private const DBDRIVER = 'mysql';
    private $connection;

    public function __construct()
    {
        try {
            $this->connection = new PDO(
                self::DBDRIVER . ':host=' .
                    self::DBHOST . ';dbname=' .
                    self::DBNAME,
                self::DBUSER,
                self::DBPASS
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $this->connection;
    }
}

$db = new Database();
