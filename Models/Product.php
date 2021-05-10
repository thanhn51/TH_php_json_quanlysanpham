<?php

namespace Models;
class Product
{
    private string $name;
    private int $price;

    public function __construct($name = '', $price = 0){
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return mixed|string
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @return int|mixed
     */
    public function getPrice(): mixed
    {
        return $this->price;
    }

    /**
     * @param mixed|string $name
     */
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int|mixed $price
     */
    public function setPrice(mixed $price): void
    {
        $this->price = $price;
    }

}