<?php

use jugger\bitrix\iblock\Url;
use jugger\bitrix\iblock\Element;

$product = $arParams['model'];
$props = Element::getProperties($product["ID"], ["price"]);

$name = $product["NAME"];
$price = $props['price'][0];
$link = Url::getElementUrl($product);

$img = \shop\helpers\ProductHelper::getPreviewByProduct($product);

?>
<div class="material-card catalog-list-item">
    <a href="<?= $link ?>" class="catalog-list-item__image" style="background-image:url('<?= $img ?>')"></a>
    <div class="catalog-list-item__wrap-name">
        <div class="catalog-list-item__name">
            <a href="<?= $link ?>">
                <?= $name ?>
            </a>
        </div>
    </div>
    <div class="catalog-list-item__price">
        <?= number_format($price, 0, '.', ' ') ?> <i class="fa fa-ruble" aria-hidden="true"></i>
    </div>
    <div class="catalog-list-item__btns">
        <a href="<?= $link ?>" class="btn btn-secondary">
            Подробнее
        </a>
        <?php
        $APPLICATION->IncludeComponent("jugger:basket.addbtn", "small", [
            'count' => 1,
            'product' => $product['ID'],
        ]);
        ?>
    </div>
</div>
