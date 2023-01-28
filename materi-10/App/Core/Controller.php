<?php

namespace App\Core;

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: X-Requested-With');

use App\Core\Input;
use App\Core\DotEnvKey;
use App\Core\HasTokens;

class Controller
{
    use HasTokens;
    protected object $input;
    protected object $env;

    public function __construct()
    {
        $this->input = new Input();
        $this->env = new DotEnvKey();
    }

    /**
     * Response method to send response to the client
     *
     * @param  mixed $status_code
     * @param  mixed $response
     * @return void
     */
    public function response(int $status_code, $response): void
    {
        http_response_code($status_code);
        header('Content-Type: application/json');
        echo json_encode($response);
        exit;
    }

    /**
     * Model method to load the model
     *
     * @param  mixed $model
     * @return object
     */
    public function model(string $model): object
    {
        if (is_array($model)) {
            $model = array_map(function ($model) {
                $model = 'App\\Models\\' . $model;
                $model = $model . 'Models';
                return new $model;
            }, $model);
            return $model;
        }
        $model = 'App\\Models\\' . $model;
        return new $model;
    }
}
