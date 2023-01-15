<?php

require_once('Database.php');

class Users
{
    private string $table = 'users';
    private ?object $statement;

    public function __construct()
    {
        $this->statement = new Database();
        $this->statement = $this->statement->connection;
        $this->username = $_POST['username'] ?? null;
        $this->password = $_POST['password'] ?? null;
    }

    public function users(): void
    {
        $query = "SELECT * FROM $this->table";
        $statement = $this->statement->prepare($query);
        $statement->execute();
        $users = $statement->fetchAll(PDO::FETCH_OBJ);
        $response = [
            'message' => 'Data User Berhasil Ditampilkan',
            'data' => $users
        ];
        echo json_encode($response, JSON_PRETTY_PRINT);
    }

    public function store(): void
    {
        $query = "INSERT INTO {$this->table} (username, password) VALUES (:username, :password)";
        $statement = $this->statement->prepare($query);
        $password = md5($this->password);
        $statement->bindParam(':username', $this->username);
        $statement->bindParam(':password', $password);
        $statement->execute();
        $response = [
            'message' => 'Data User Berhasil Disimpan',
        ];
        echo json_encode($response);
    }

    public function update(int $id): void
    {
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
        echo json_encode($response);
    }

    public function delete(int $id): void
    {
        $query = "DELETE FROM {$this->table} WHERE user_id = :user_id";
        $statement = $this->statement->prepare($query);
        $statement->bindParam(':user_id', $id);
        $statement->execute();
        $response = [
            'message' => 'Data User Berhasil Dihapus',
        ];
        echo json_encode($response);
    }
}

$users = new Users();
$users->users();
// $users->store();
// $users->update(1);
// $users->delete(2);
