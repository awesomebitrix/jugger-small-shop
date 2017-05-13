<?php

$action = "/api/basket/add-item.php";
$count = (string) $arParams['count'];
$product = (string) $arParams['product'];

CModule::includeModule('basket');
$exist = false;
$items = (new basket\repos\SessionBasketRepo)->getById("")->getItems();
foreach ($items as $item) {
    if ($item->getProduct()[0] == $product) {
        $exist = true;
        break;
    }
}

echo "
<form action='{$action}' method='post' onsubmit='return false'>
    <input type='hidden' name='count' value='{$count}'>
    <input type='hidden' name='product' value='{$product}'>
";

if ($exist) {
    echo "
    <span class='btn btn-success'>Добавлен</span>
    ";
}
else {
    echo "
    <button type='submit' class='btn btn-primary add-to-basket'>
        Добавить в корзину
    </button>
    ";
}

echo "
</form>
";
