<?php

use jugger\bitrix\iblock\Url;

include_once __DIR__ .'/functions.php';

$items = array_map(function($row) {
    return [
        'text' => $row['NAME'],
        'link' => Url::getSectionUrl($row),
        'childs' => listViewGetSectionChilds($row['ID']),
    ];
}, $arParams['items']);

array_unshift($items, [
    'text' => 'Каталог',
    'link' => '/catalog',
]);

printMenu($items);

?>
