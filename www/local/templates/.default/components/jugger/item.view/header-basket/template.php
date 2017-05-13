<?php

use Bitrix\Iblock\ElementTable;
use jugger\bitrix\iblock\Url;

CModule::includeModule('iblock');

include_once __DIR__ .'/functions.php';

$basketItem = $arParams['model'];
$productId = (int) $basketItem->getProduct()[0];
$product = ElementTable::getRow([
    'filter' => [
        'ID' => $productId,
    ],
]);
if (!$product) {
    return;
}

$name = $product['NAME'];
$link = Url::getElementUrl($product);
$img = itemview\headerbasket\getPreviewSrcProduct($product);

?>
<div class="item-view-header-basket">
    <div class="item-view-header-basket__image">
        <?php
        echo "<img src='{$img}' alt='{$name}'>";
        ?>
    </div>
    <div class="item-view-header-basket__name">
        <?php
        echo "<a href='{$link}'>{$name}</a>";
        ?>
    </div>
</div>
