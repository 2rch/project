<?php

namespace App\Repositories;

use App\Models\User;
use libraries\DatabaseConnection;
use PDO;

class UserRepository
{
    private PDO $connect;

    public function __construct(DatabaseConnection $databaseConnection)
    {
        $this->connect = $databaseConnection->getConnection();
    }

    public function getAll(): array
    {
        $request = "SELECT id, email, password, nickname, name FROM users";
        $data = $this->connect->query($request);
        $data->setFetchMode(PDO::FETCH_CLASS, 'App\Models\User');
        return $data->fetchAll();
    }

    /**
     * @param int $id
     * @return User
     */
    public function getById(int $id): ?User
    {
        $request = "SELECT email, password, nickname, name FROM users WHERE id = :id";
        $data = $this->connect->prepare($request);
        $data->execute(['id' => $id]);
        $data->setFetchMode(PDO::FETCH_CLASS, 'App\Models\User');
        return $data->fetch();
    }

    /**
     * @param string $email
     * @return string
     */
    public function getByEmail(string $email)
    {
        $request = "SELECT id, password, nickname, name FROM users WHERE email = :email";
        $data = $this->connect->prepare($request);
        $data->execute(['email' => $email]);
        $data->setFetchMode(PDO::FETCH_CLASS, 'App\models\User');
        return $data->fetch();
    }

    /**
     * @param string $nickname
     * @return string
     */
    public function getByNickname(string $nickname)
    {
        $request = "SELECT id, email, password, name 
                FROM users 
                WHERE nickname = :nickname";
        $data = $this->connect->prepare($request);
        $data->execute(['name' => $nickname]);
        $data->setFetchMode(PDO::FETCH_CLASS, 'App\models\User');
        return $data->fetch();
    }

    /**
     * @param string $name
     * @param string $nickname
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function create(string $email, string $password, string $nickname, string $name): bool
    {
        $request = "INSERT INTO users (email, password, nickname, name) 
                VALUE (:email, :password, :nickname, :name)";
        $data = $this->connect->prepare($request);
        $data->execute(['email' => $email, 'password' => $password, 'nickname' => $nickname, 'name' => $name]);
        return true;
    }

    /**
     * @param int $id
     * @param string $name
     * @param string $nickname
     * @param string $email
     * @param string $password
     * @return bool
     */
    public function update(int $id, string $email, string $password, string $nickname, string $name): bool
    {
        $request = "UPDATE users 
                SET (  
                       email = :email, 
                       password = :password, 
                       nickname = :nickname,
                       name = :name
                    ) 
                WHERE id = :id";
        $data = $this->connect->prepare($request);
        $data->execute([
            'id' => $id,
            'email' => $email,
            'password' => $password,
            'nickname' => $nickname,
            'name' => $name
        ]);
        return true;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $request = "DELETE FROM users 
                WHERE id = :id";
        $data = $this->connect->prepare($request);
        $data->execute(['id' => $id]);
        return true;
    }
}
