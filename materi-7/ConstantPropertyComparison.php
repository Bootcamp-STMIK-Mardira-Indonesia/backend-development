<?php

class Database
{
    var string $host = 'localhost';
    var string $user = 'root';
    var string $password = '';
    var string $dbname = "oop";
}

$db = new Database();
echo $db->host . "<br>";
echo $db->user . "<br>";
echo $db->password . "<br>";
echo $db->dbname . "<br>";
