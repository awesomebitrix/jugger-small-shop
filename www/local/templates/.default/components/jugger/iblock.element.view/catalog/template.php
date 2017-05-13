<?php

use jugger\bitrix\iblock\Url;
use jugger\bitrix\iblock\Section;
use jugger\bitrix\iblock\Element;

use Bitrix\Iblock\SectionTable;

$element = $arParams['model'];
$props = Element::getProperties($element['ID'], ['price', 'images']);

/*
 Навигационная цепочка
 */
$section = SectionTable::getRow([
    'filter' => [
        'ID' => $element['IBLOCK_SECTION_ID'],
    ],
]);

$path = Section::getParents($section);
$path[] = $section;
foreach ($path as $item) {
    $APPLICATION->AddChainItem(
        $item['NAME'],
        Url::getSectionUrl($item)
    );
}
$APPLICATION->AddChainItem($element['NAME']);
$APPLICATION->SetTitle($element['NAME']);

/*
 данные
 */
$desc = $element['DETAIL_TEXT'];
$price = $props['price'][0];
$images = array_map(function($fileId) {
    return CFile::GetFileArray($fileId)['SRC'];
}, $props['images']);

?>
<div class="element-catalog__product material-card">
    <div class="element-catalog__image pull-left">
        <?php
        $APPLICATION->IncludeComponent("jugger:list.view", "slider-with-loupe", [
            'items' => $images,
        ]);
        ?>
    </div>
    <div class="element-catalog__content">
        <div class="element-catalog__price">
            <?= number_format($price, 0, '.', ' ') ?> <i class="fa fa-ruble" aria-hidden="true"></i>
        </div>
        <div class="element-catalog__desc">
            <?= nl2br($desc) ?>
        </div>
        <div class="element-catalog__cart">
            <?php
            $APPLICATION->IncludeComponent("jugger:basket.addbtn", "with-count", [
                'product' => $element['ID'],
            ])
            ?>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<?php
$APPLICATION->IncludeComponent("jugger:mapper.list.view", "user-viewed", [
    'class' => 'value',
    'queryParams' => 'value',
])
?>
