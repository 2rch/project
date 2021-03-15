<?php


namespace App\Models;


class Product
{
    private int $id;
    private string $title;
    private string $img;
    private string $description;
    private int $price;
    private string $category;
    private int $amount = 0;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setImg(string $img): void
    {
        $this->img = $img;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getImg(): string
    {
        return $this->img;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function isAvailable(): bool
    {

        if ($this->getAmount() !== 0) {
            return true;
        }
        return false;
    }
}