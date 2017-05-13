<?php

include_once __DIR__.'/functions.php';

use jugger\bitrix\iblock\Url;
use jugger\bitrix\iblock\Section;

use Bitrix\Main\Entity\ReferenceField;
use Bitrix\Main\Db\SqlExpression;
use Bitrix\Iblock\ElementTable;

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

/*
 параметры для списка
 */
$params = [
    'filter' => [
        'IBLOCK_SECTION_ID' => $section['ID'],
    ],
    'runtime' => [
        new ReferenceField('price', "\Bitrix\Iblock\ElementPropertyTable", [
            '=this.ID' => 'ref.IBLOCK_ELEMENT_ID',
            '@ref.IBLOCK_PROPERTY_ID' => new SqlExpression("(SELECT id FROM b_iblock_property WHERE code = 'price')")
        ])
    ],
];

?>
<div class="catalog-products">
    <?php
    $APPLICATION->IncludeComponent("jugger:complex.list.view", "", [
        'mapperClass' => 'Bitrix\Iblock\ElementTable',
        'mapperView' => 'catalog-products',
        'params' => $params,
        'sorter' => [
            'available' => [
                'NAME' => 'Название',
                'price.VALUE' => 'Цена',
                'ACTIVE_FROM' => 'Новизна',
            ],
        ],
        'pager' => [
            'pageSize' => 36,
        ],
    ]);
    ?>
</div>
