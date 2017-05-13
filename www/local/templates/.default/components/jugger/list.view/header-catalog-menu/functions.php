<?php

use jugger\bitrix\iblock\Url;
use Bitrix\Iblock\SectionTable;

function listViewGetSectionChilds(int $sectionId) {
    $items = SectionTable::getList([
        'filter' => [
            'IBLOCK_SECTION_ID' => $sectionId,
        ],
    ])->fetchAll();
    $childs = [];
    foreach ($items as $row) {
        $childs[] = [
            'text' => $row['NAME'],
            'link' => Url::getSectionUrl($row),
            'childs' => listViewGetSectionChilds($row['ID']),
        ];
    }
    return $childs;
}

function printMenu(array $items) {
    echo "<ul class='catalog-menu'>";
    foreach ($items as $item) {
        $text = $item['text'];
        $link = $item['link'];
        $link = "<a href='{$link}'>{$text}</a>";

        echo "<li class='catalog-menu__item'>{$link}";
        if ($item['childs']) {
            printMenu($item['childs']);
        }
        echo "</li>";
    }
    echo "</ul>";
}
