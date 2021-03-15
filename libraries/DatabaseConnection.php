<?php

namespace libraries;

use PDO;

class DatabaseConnection
{
    private static $instance = null;

    /**
     * @param string|null $host
     * @param string|null $db_name
     * @param string|null $user
     * @param string|null $password
     * @return PDO
     */

    public function __construct(string $host, string $db_name, string $user, string $password)
    {
        $this->host = $host ? $host : getenv('DB_HOST');
        $this->db_name = $db_name ? $db_name : getenv('DB_NAME');
        $this->user = $user ? $user : getenv('DB_USER');
        $this->password = $password ? $password : getenv('DB_PASSWORD');
    }

    public static function getInstance(): ?DatabaseConnection
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection(): PDO
    {
        $dsn = "mysql:host={$this->host};dbname={$this->db_name}";
        return new PDO($dsn, $this->user, $this->password);
    }
}