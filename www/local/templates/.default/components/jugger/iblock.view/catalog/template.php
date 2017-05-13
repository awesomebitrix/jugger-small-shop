<?php

include_once __DIR__.'/functions.php';

use Bitrix\Iblock\SectionTable;

$iblock = $arParams['model'];
$sections = SectionTable::getList([
    'filter' => [
        'IBLOCK_ID' => $iblock['ID'],
        'IBLOCK_SECTION_ID' => null,
    ],
])->fetchAll();

?>
<div class="iblock-view material-card">
    <div class="iblock-view__sections">
        <?php
        foreach ($sections as $item):
            $childs = iblockViewGetChilds($item['ID']);
        ?>
        <div class="iblock-view__sections-item">
            <h3>
                <?= $item['NAME'] ?>
            </h3>
            <?php
            if ($childs) {
                $APPLICATION->IncludeComponent("jugger:list.view", "catalog-section-childs", [
                    'isCached' => true,
                    'items' => $childs,
                ]);
            }
            ?>
        </div>
        <?php
        endforeach;
        ?>
    </div>
</div>
