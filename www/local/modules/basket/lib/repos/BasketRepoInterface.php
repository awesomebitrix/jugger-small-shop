<?php

namespace basket\repos;

use basket\models\Basket;

interface BasketRepoInterface
{
    public function save(Basket $basket);

    public function delete(Basket $basket);

    public function getById(string $id): Basket;
}
