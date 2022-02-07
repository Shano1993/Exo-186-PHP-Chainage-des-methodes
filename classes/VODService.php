<?php

class VODService
{
    public string $name;
    public float $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return VODService
     */
    public function setName(string $name): VODService
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return VODService
     */
    public function setPrice(float $price): VODService
    {
        $this->price = $price;
        return $this;
    }


}
