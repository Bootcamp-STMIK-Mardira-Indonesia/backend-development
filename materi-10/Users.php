<?php

require_once('Database.php');

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: X-Requested-With');

class Users
{
    private string $table = 'users';
    private ?string $username;
    private ?string $password;
    public ?int $id;
    private ?object $statement;

    public function __construct()
    {
        $this->statement = new Database();
        $this->statement = $this->statement->connection;
        $this->username = $_POST['username'] ?? null;
        $this->password = $_POST['password'] ?? null;
        $this->id = $_GET['id'] ?? null;
    }

    public function users(): void
    {
        if ($this->id) {
            $user = $this->getUser($this->id);

            $response = [
                'message' => 'Data User',
                'data' => $user
            ];
            http_response_code(200);
            echo json_encode($response, JSON_PRETTY_PRINT);


        } else {
            $users = $this->getUsers();
            $total = count($users);
            $response = [
                'message' => 'Data User',
                'total' => $total,
                'data' => $users
            ];
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }

    private function getUsers(): array
    {
        $query = "SELECT * FROM {$this->table}";
        $statement = $this->statement->prepare($query);
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }

    private function getUser(int $id): object
    {
        $query = "SELECT * FROM {$this->table} WHERE user_id = :user_id";
        $statement = $this->statement->prepare($query);
        $statement->bindParam(':user_id', $id);
        $statement->execute();
        if ($statement->rowCount() == 0) {
            $response = [
                'message' => 'Data User Tidak Ditemukan!',
            ];
            http_response_code(404);
            echo json_encode($response, JSON_PRETTY_PRINT);
            exit;
        }
        $user = $statement->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    public function store(): void
    {
        $query = "SELECT * FROM {$this->table} WHERE username = :username";
        $statement = $this->statement->prepare($query);
        $statement->bindParam(':username', $this->username);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            $response = [
                'message' => 'Data User Sudah Ada!',
            ];
            http_response_code(409);
        } else {
            $query = "INSERT INTO {$this->table} (username, password) VALUES (:username, :password)";
            $statement = $this->statement->prepare($query);
            $password = md5($this->password);
            $statement->bindParam(':username', $this->username);
            $statement->bindParam(':password', $password);
            $statement->execute();
            $getUsers = "SELECT * FROM users WHERE username = :username";
            $statement = $this->statement->prepare($getUsers);
            $statement->bindParam(':username', $this->username);
            $statement->execute();
            $user = $statement->fetch(PDO::FETCH_OBJ);
            $response = [
                'message' => 'Data User Berhasil Disimpan',
                'user' => $user,
            ];
            http_response_code(201);
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    public function update(int $id): void
    {

        $data = file_get_contents("php://input");
        $_PUT = json_decode($data, true);
        $this->username = $_PUT['username'] ?? null;
        $this->password = $_PUT['password'] ?? null;

        $query = "SELECT * FROM {$this->table} WHERE user_id = :user_id";
        $statement = $this->statement->prepare($query);
        $statement->bindParam(':user_id', $id);
        $statement->execute();

        if ($statement->rowCount() == 0) {
            $response = [
                'message' => 'Data User Tidak Ditemukan!',
            ];
            echo json_encode($response, JSON_PRETTY_PRINT);
            exit;
        }

        $query = "UPDATE {$this->table} SET username = :username, password = :password WHERE user_id = :user_id";
        $statement = $this->statement->prepare($query);
        $password = md5($this->password);
        $statement->bindParam(':username', $this->username);
        $statement->bindParam(':password', $password);
        $statement->bindParam(':user_id', $id);
        $statement->execute();
        $response = [
            'message' => 'Data User Berhasil Diubah',
        ];
        http_response_code(200);
        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    public function delete(int $id): void
    {
        $query = "SELECT * FROM {$this->table} WHERE user_id = :user_id";
        $statement = $this->statement->prepare($query);
        $statement->bindParam(':user_id', $id);
        $statement->execute();

        if ($statement->rowCount() == 0) {
            $response = [
                'message' => 'Data User Tidak Ditemukan!',
            ];
            echo json_encode($response, JSON_PRETTY_PRINT);
            exit;
        }

        $query = "DELETE FROM {$this->table} WHERE user_id = :user_id";
        $statement = $this->statement->prepare($query);
        $statement->bindParam(':user_id', $id);
        $statement->execute();
        $response = [
            'message' => 'Data User Berhasil Dihapus',
        ];

        echo json_encode($response, JSON_PRETTY_PRINT);
    }
}

$users = new Users();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $users->users();
        break;
    case 'POST':
        $users->store();
        break;
    case 'PUT':
        $users->update($users->id);
        break;
    case 'DELETE':
        $users->delete($users->id);
        break;
    default:
        $response = [
            'message' => 'Method Not Allowed',
        ];
        http_response_code(405);
        echo json_encode($response);
        break;
}