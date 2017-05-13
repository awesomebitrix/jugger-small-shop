<?php

$action = "/api/basket/add-item.php";
$count = (string) $arParams['count'];
$product = (string) $arParams['product'];

echo "
<form action='{$action}' method='post' onsubmit='return false'>
    <input type='hidden' name='product' value='{$product}'>
    <div class='form-group'>
";

$APPLICATION->IncludeComponent("ui:spinner", "", [
    'min' => '1',
    'step' => '1',
    'name' => 'count',
    'value' => $count,
]);

echo "
    </div>
    <div>
        <button type='submit' class='btn btn-primary add-to-basket'>Добавить</button>
    </div>
</form>";
