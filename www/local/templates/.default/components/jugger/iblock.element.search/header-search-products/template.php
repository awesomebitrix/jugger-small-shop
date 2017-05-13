<?php

$mapperParams = $arResult['mapperParams'];
$mapperParams['limit'] = 5;
if ($mapperParams) {
    $APPLICATION->IncludeComponent("jugger:mapper.list.view", "product-autocomplete", [
        'class' => '\Bitrix\Iblock\ElementTable',
        'queryParams' => $mapperParams,
    ]);
}
