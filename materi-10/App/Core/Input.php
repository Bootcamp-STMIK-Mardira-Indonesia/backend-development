<?php

namespace App\Core;

class Input
{
    public function get(string $key = null, $default = null)
    {
        if ($key) {
            return $_GET[$key] ?? $default;
        }
        return $_GET;
    }

    public function post(string $key = null, $default = null)
    {
        if ($key) {
            return $_POST[$key] ?? $default;
        }
        return $_POST;
    }
}