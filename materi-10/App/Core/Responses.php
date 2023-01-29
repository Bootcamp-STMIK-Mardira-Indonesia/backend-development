<?php

namespace App\Core;

trait Responses
{
    public function response(int $code, array $data): void
    {
        http_response_code($code);
        header('Content-Type: application/json');
        echo json_encode($data);
        exit;
    }
}
