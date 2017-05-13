<?php

namespace basket\models;

use basket\models\BasketItem;

class Basket
{
    protected $id;
    protected $items;

    public function __construct(string $id)
    {
        $this->id = $id;
        $this->items = [];
    }

    public function getId():string
    {
        return $this->id;
    }

    public function getItems():array
    {
        return $this->items;
    }

    public function addItem(BasketItem $item):void
    {
        $id = $item->getId();
        if (!$this->items[$id]) {
            $this->items[$id] = $item;
            return;
        }

        $count = $item->getCount() + $this->items[$id]->getCount();
        $this->setItemCount($item, $count);
    }

    public function setItemCount(BasketItem $item, int $count):void
    {
        $id = $item->getId();
        if (!$this->items[$id]) {
            throw new \Exception("Item '{$id}' not found");
        }
        $this->items[$id]->addCount($count);
    }

    public function removeItem(BasketItem $item):void
    {
        $id = $item->getId();
        unset($this->items[$id]);
    }
}
