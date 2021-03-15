<?php

namespace App\Repositories;

use App\Models\Product;
use libraries\DatabaseConnection;
use PDO;

class ProductRepository
{
    private PDO $connect;

    public function __construct(DatabaseConnection $databaseConnection)
    {
        $this->connect = $databaseConnection->getConnection();
    }

    public function getAll(): array
    {
        $request = "SELECT id, title, img, description, price, category, ammount
                    FROM products";
        $data = $this->connect->query($request);
        $data->setFetchMode(PDO::FETCH_CLASS, 'App\Models\Product');
        return $data->fetchAll();
    }

    public function getById(int $id): ?Product
    {
        $request = "SELECT id, title, img, description, price, category, ammount
                    FROM products
                    WHERE id = :id";
        $data = $this->connect->prepare($request);
        $data->execute(['id' => $id]);
        $data->setFetchMode(PDO::FETCH_CLASS, 'App\Models\Product');
        return $data->fetch();
    }

    public function getByCategory(string $category): array
    {
        $request = "SELECT id, title, img, description, price, category, ammount
                    FROM products
                    WHERE category = :category";
        $data = $this->connect->prepare($request);
        $data->execute(['category' => $category]);
        $data->setFetchMode(PDO::FETCH_CLASS, 'App\Models\Product');
        return $data->fetch();
    }

    public function create(
        int $id,
        string $title,
        string $img,
        string $description,
        int $price,
        string $category,
        int $amount
    ): bool
    {
        $request = "INSERT INTO products (id, title, img, description, price, category, ammount)
                    VALUES (:id, :title, :img, :description, :price, :category, :amount)";
        $data = $this->connect->prepare($request);
        $data->execute([
            'id' => $id,
            'title' => $title,
            'img' => $img,
            'description' => $description,
            'price' => $price,
            'category' => $category,
            'amount' => $amount
        ]);
        return true;
    }

    public function update(
        int $id,
        string $title,
        string $img,
        string $description,
        int $price,
        string $category,
        int $amount
    ): bool
    {
        $request = "UPDATE products (title, img, description, price, category, ammount)
                    SET (:title, :img, :description, :price, :category, :amount)
                    WHERE id = :id";
        $data = $this->connect->prepare($request);
        $data->execute([
            'id' => $id,
            'title' => $title,
            'img' => $img,
            'description' => $description,
            'price' => $price,
            'category' => $category,
            'amount' => $amount
        ]);
        return true;
    }

    public function delete(int $id): bool
    {
        $request = "DELETE FROM products WHERE id = :id";
        $data = $this->connect->prepare($request);
        $data->execute(['id' => $id]);
        return true;
    }
}
