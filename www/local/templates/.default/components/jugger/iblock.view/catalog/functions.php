<?php

use Bitrix\Iblock\SectionTable;

function iblockViewGetChilds(int $sectionId) {
    return SectionTable::getList([
        'filter' => [
            'IBLOCK_SECTION_ID' => $sectionId,
        ],
        'order' => [
            'NAME' => 'asc',
        ],
    ])->fetchAll();
}
