<?php

namespace basket\repos;

use basket\models\Basket;
use basket\models\BasketItem;

class SessionBasketRepo implements BasketRepoInterface
{
    public function __construct()
    {
        session_start();
    }

    public function save(Basket $basket)
    {
        $id = $basket->getId();
        $_SESSION[$id] = serialize($basket);
    }

    public function delete(Basket $basket)
    {
        $id = $basket->getId();
        unset($_SESSION[$id]);
    }

    public function getById(string $id): Basket
    {
        if (!$id) {
            $id = "basket_default";
        }

        return $_SESSION[$id] ? unserialize($_SESSION[$id]) : new Basket($id);
    }
}
