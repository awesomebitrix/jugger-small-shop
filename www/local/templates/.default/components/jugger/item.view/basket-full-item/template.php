<?php

use jugger\bitrix\iblock\Url;
use jugger\bitrix\iblock\Element;

list($product, $count) = $arParams['model'];

$props = Element::getProperties($product['ID'], ['price']);
$price = $props['price'][0] ?? 0;

$name = $product['NAME'];
$link = Url::getElementUrl($product);
$img = \shop\helpers\ProductHelper::getPreviewByProduct($product);

?>
<tr class="basket-full-item">
    <td class="basket-full-item__name">
        <?php
        echo "
        <a href='{$link}'>
            <img src='{$img}' alt='{$name}'>
            <span>{$name}</span>
        </a>
        ";
        ?>
    </td>
    <td class="basket-full-item__price">
        <?= $price ?>
    </td>
    <td class="basket-full-item__count">
        <?php
        $APPLICATION->IncludeComponent("ui:spinner", "", [
            'min' => '1',
            'step' => '1',
            'name' => 'count',
            'value' => $count,
        ]);
        ?>
    </td>
    <td class="basket-full-item__amount">
        <!-- сумма -->
    </td>
    <td class="basket-full-item__remove">
        удалялка
    </td>
</tr>
