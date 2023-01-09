<?php

class Database
{
    const DBHOST = 'localhost';
    const DBUSER = 'root';
    const DBPASS =  '';
    const DBNAME = 'oop';

    function getHost(): void
    {
        echo self::DBHOST;
    }
}

$db = new Database();
$db->getHost();
