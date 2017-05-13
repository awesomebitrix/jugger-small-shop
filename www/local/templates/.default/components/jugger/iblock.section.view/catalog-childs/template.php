<?php

use jugger\bitrix\iblock\Url;
use jugger\bitrix\iblock\Section;

$section = $arParams['model'];

/*
 Навигационная цепочка
 */
$path = Section::getParents($section);
foreach ($path as $item) {
    $APPLICATION->AddChainItem(
        $item['NAME'],
        Url::getSectionUrl($item)
    );
}
$APPLICATION->AddChainItem($section['NAME']);
$APPLICATION->SetTitle($section['NAME']);
?>
<div class="material-card">
    <?php
    $APPLICATION->IncludeComponent("jugger:list.view", "catalog-section-childs", [
        'isCached' => true,
        'items' => $arParams['childs'],
    ]);
    ?>
</div>
