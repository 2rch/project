<?php
namespace App\Models;

use App\Tools\Exceptions\IdException;

class Dbreader
{
    /**
     * @var array
     */
    private $products;

    public function __construct(array $products = [])
    {
        $this->products = $products;
    }

    public function getByID(int $id): array
    {
        foreach ($this->products as $product) {
            if ($product["id"] == $id) {
                return $product;
            }
        }
        throw new IdException('Wrong ID');
    }
}
