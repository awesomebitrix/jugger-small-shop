<?php

$basket = $arParams['basket'];
$items = $basket->getItems();

?>

<div class="catalog-basket-header">
    <div class="catalog-basket-header__btn">
        <a href="/catalog/basket/" class="catalog-basket-header__btn-icon">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
        </a>
        <?php
        $count = count($items);
        if ($count) {
            echo "
            <div class='catalog-basket-header__btn-count'>
                {$count}
            </div>
            ";
        }
        ?>

        <div class="catalog-basket-header__items material-card">
            <?php
            if (!$count) {
                include __DIR__.'/empty-items.php';
            }
            else {
            ?>
            <div class="header-basket-items">
                <?php
                $APPLICATION->IncludeComponent("jugger:list.view", "", [
                    'items' => $items,
                    'itemView' => 'header-basket',
                ]);
                ?>
            </div>
            <br>
            <div class='text-center'>
                <a href='/catalog/basket/' class='btn btn-primary btn-sm'>
                    Перейти к корзине
                </a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
