<?php

class Database
{
    static string $host;
    static string $username = 'root';
    static string $dbpass =  '';
    static string $dbname = 'oop';

    static function getHost(): string
    {
        return self::$host;
    }

    static function setHost(string $host): void
    {
        self::$host = $host;
    }

    static function callSetHost(): void
    {
        self::setHost('localhost');
        echo self::getHost();
    }
}

Database::callSetHost();
