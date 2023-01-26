<?php

// import script
require_once('./Database.php');
require_once('./vendor/autoload.php');

// menggunakan library JWT dan DotENV
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Dotenv\Dotenv;

// menggunakan header untuk mengakses API
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: X-Requested-With');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

date_default_timezone_set('Asia/Jakarta');

// membuat class Auth
class Auth
{
    private string $table = 'users';
    private ?string $username;
    private ?string $password;
    private ?string $token;
    private ?object $statement;

    public function __construct()
    {
        // membuat instance dari class Database
        $this->statement = new Database();
        $this->statement = $this->statement->connection;
        $this->username = $_POST['username'] ?? null;
        $this->password = $_POST['password'] ?? null;
        $this->token = getallheaders()['Authorization'] ?? null;
        // membuat instance dari class DotENV
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    }

    public function login(): void
    {
        // membuat query untuk mengecek username dan password
        $query = "SELECT * FROM {$this->table} WHERE username = :username AND password = :password";
        $statement = $this->statement->prepare($query);
        // binding data
        $password = md5($this->password);
        $statement->bindParam(':username', $this->username);
        $statement->bindParam(':password', $password);
        // eksekusi query
        $statement->execute();
        // jika data ditemukan
        if ($statement->rowCount() > 0) {
            $user = $statement->fetch(PDO::FETCH_OBJ);
            // expired time 15 * 60 (detik) = 15 menit
            $expired_time = time() + (15 * 60);
            // membuat token
            $payload = [
                'exp' => $expired_time,
                'data' => [
                    'id' => $user->user_id,
                    'username' => $user->username,
                ]
            ];
            // membuat token dengan library JWT
            $jwt = JWT::encode($payload, $_ENV['ACCESS_TOKEN_SECRET_KEY'], 'HS256');
            // membuat response
            http_response_code(200);
            $response = [
                'message' => 'Login Berhasil',
                'token' => $jwt,
                'expired_time' => date('d-m-Y H:i:s', $expired_time),
            ];
            echo json_encode($response, JSON_PRETTY_PRINT);
        } else {
            // membuat response
            $response = [
                'message' => 'Login Gagal'
            ];
            http_response_code(401);
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }

    public function check(): void
    {

        // jika token tidak ada
        if (!$this->token) {
            // membuat response
            $response = [
                'message' => 'Token tidak ada'
            ];
            http_response_code(401);
            echo json_encode($response, JSON_PRETTY_PRINT);
            exit;
        }

        // memecah token
        $token = explode(' ', $this->token);

        // jika token tidak sesuai
        if ($token[0] !== 'Bearer') {
            // membuat response
            $response = [
                'message' => 'Token tidak sesuai'
            ];
            http_response_code(401);
            echo json_encode($response, JSON_PRETTY_PRINT);
            exit;
        }

        // dekripsi / decrypt token
        try {
            $jwt = JWT::decode($token[1], new Key($_ENV['ACCESS_TOKEN_SECRET_KEY'], 'HS256'));
        } catch (\Exception $e) {
            // membuat response
            $response = [
                'message' => $e->getMessage()
            ];
            http_response_code(401);
            echo json_encode($response, JSON_PRETTY_PRINT);
            exit;
        }

        // cek jika data sesuai dengan database
        $query = "SELECT * FROM {$this->table} WHERE username = :username";
        $statement = $this->statement->prepare($query);
        // binding data
        $statement->bindParam(':username', $jwt->data->username);
        // eksekusi query
        $statement->execute();
        // jika data tidak ditemukan
        if ($statement->rowCount() === 0) {
            // membuat response
            $response = [
                'message' => 'Token tidak valid'
            ];
            http_response_code(401);
            echo json_encode($response, JSON_PRETTY_PRINT);
            exit;
        }

        // membuat response
        $response = [
            'message' => 'Token valid',
            'data' => $jwt->data
        ];
        http_response_code(200);
        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    public function logout(): void
    {
        // cek token bearer
        if (!$this->token) {
            // membuat response
            $response = [
                'message' => 'Token tidak ada'
            ];
            http_response_code(401);
            echo json_encode($response, JSON_PRETTY_PRINT);
            exit;
        }

        $token = explode(' ', $this->token);
        // decode data token
        try {
            $jwt = JWT::decode($token[1], new Key($_ENV['ACCESS_TOKEN_SECRET_KEY'], 'HS256'));
        } catch (\Exception $e) {
            // membuat response
            $response = [
                'message' => $e->getMessage()
            ];
            http_response_code(401);
            echo json_encode($response, JSON_PRETTY_PRINT);
            exit;
        }

        // cek jika data sesuai dengan database
        $query = "SELECT * FROM {$this->table} WHERE username = :username";
        $statement = $this->statement->prepare($query);
        // binding data
        $statement->bindParam(':username', $jwt->data->username);
        // eksekusi query
        $statement->execute();
        // jika data tidak ditemukan
        if ($statement->rowCount() === 0) {
            // membuat response
            $response = [
                'message' => 'Token tidak valid'
            ];
            http_response_code(401);
            echo json_encode($response, JSON_PRETTY_PRINT);
            exit;
        }

        // membuat response
        $response = [
            'message' => 'Logout Berhasil'
        ];
        http_response_code(200);
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
}

$auth = new Auth();
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $auth->login();
        break;
    case 'GET':
        $auth->check();
        break;
    case 'DELETE':
        $auth->logout();
        break;
    default:
        http_response_code(405);
        $response = [
            'message' => 'Method Not Allowed'
        ];
        echo json_encode($response, JSON_PRETTY_PRINT);
        break;
}
