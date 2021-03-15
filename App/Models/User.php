<?php

namespace App\Models;

class User
{
    private int $id;
    private string $email;
    private string $password;
    private string $nickname;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setNickname(string $nickname): void
    {
        $this->nickname = $nickname;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function userStringify() :string
    {
        return sprintf('{"id": %d, "email": %s, "password": %s, "nickname": %s}',
        $this->getId(),
        $this->getEmail(),
        $this->getPassword(),
        $this->getNickname()
        );
    }
}
