<?php

class Authentication
{
    function login(string $username, string $password): bool
    {

        if ($username == "admin" && $password == "admin") {
            return true;
        } else {
            return false;
        }
    }
}

$auth = new Authentication();
$login = $auth->login('admin', 'admin');

