<?php

class Database
{
    static string $host;
    static string $username = 'root';
    static string $dbpass =  '';
    static string $dbname = 'oop';

    function getHost(): string
    {
        return self::$host;
    }

    function setHost(string $host): void
    {
        self::$host = $host;
    }

    function callSetHost(): void
    {
        $this->setHost('localhost');
        echo $this->getHost();
    }
}

$db = new Database();
$db->callSetHost();