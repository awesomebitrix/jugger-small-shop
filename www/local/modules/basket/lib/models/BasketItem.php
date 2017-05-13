<?php

namespace basket\models;

class BasketItem
{
    protected $product;
    protected $count = 0;

    public function __construct(array $product, int $count = 1)
    {
        $this->setCount($count);
        $this->product = $product;
    }

    public function setCount(int $value):void
    {
        if ($this->validCount($value)) {
            $this->count = $value;
        }
    }

    public function addCount(int $value):void
    {
        if ($this->validCount($value)) {
            $this->count += $value;
        }
    }

    protected function validCount(int $value):bool
    {
        if ($value < 1) {
            throw new \Exception("Invalide count value: '{$value}'");
        }
        return true;
    }

    public function getCount():int
    {
        return $this->count;
    }

    public function getProduct():array
    {
        return $this->product;
    }

    public function getId():string
    {
        return md5(serialize($this->getProduct()));
    }
}
