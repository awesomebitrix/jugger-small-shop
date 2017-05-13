<?php

use jugger\bitrix\iblock\Url;
use jugger\bitrix\iblock\Section;

$section = $arParams['model'];
$childs = Section::getChilds($section);

if (count($childs)) {
    $APPLICATION->IncludeComponent("jugger:iblock.section.view", "catalog-childs", [
        'model' => $section,
        'childs' => $childs,
    ]);
}
else {
    $APPLICATION->IncludeComponent("jugger:iblock.section.view", "catalog-products", [
        'model' => $section,
    ]);
}
