<?php

use Bitrix\Iblock\ElementTable;

CModule::includeModule('iblock');

include_once __DIR__.'/functions.php';

$basket = $arParams['basket'];
$items = $basket->getItems();

?>
<div class="basket-full material-card">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>
                    Товар
                </th>
                <th>
                    Цена
                </th>
                <th>
                    Количество
                </th>
                <th>
                    Сумма
                </th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($items as $item) {
                $count = $item->getCount();
                $productId = $item->getProduct()[0];

                $product = ElementTable::getRow([
                    'filter' => [
                        'ID' => $productId,
                    ],
                ]);

                $APPLICATION->IncludeComponent("jugger:item.view", "basket-full-item", [
                    'model' => [$product, $count],
                ]);
            }
            ?>
        </tbody>
    </table>
    <hr>
    <div class="">
        <div class="pull-left">
            <b>Итого:</b>
        </div>
        <div class="pull-right">
            <span class="basket-full__total-amount"></span>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
