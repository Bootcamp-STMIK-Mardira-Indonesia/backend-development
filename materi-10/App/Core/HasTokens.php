<?php

namespace App\Core;

use Firebase\JWT\JWT;

trait HasTokens
{
    protected string $hash = 'HS256';

    public function generateToken(array $payload, string $key): string
    {
        $token = $this->encodeToken($payload, $key);
        return $token;
    }

    public function verifyToken(string $token, string $key) : object
    {
        $token = explode(' ', $token)[1];
        $decoded = $this->verifyToken($token, $key);
        if (is_string($decoded)) {
            return $decoded;
        }

        return $decoded->data;
    }

    private function encodeToken(array $payload, string $key): string
    {
        return JWT::encode($payload, $key, $this->hash);
    }

    private function decodeToken(string $token, string $key): object
    {
        try {
            $decoded = JWT::decode($token, $key, $this->hash);
            return $decoded;
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
