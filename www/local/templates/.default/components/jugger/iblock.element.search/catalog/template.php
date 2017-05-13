<?php

use Bitrix\Iblock\ElementTable;

$mapperParams = $arResult['mapperParams'];
$pagerQueryName = 'p';
$totalCount = ElementTable::getList($mapperParams)->getSelectedRowsCount();
$pager = $APPLICATION->IncludeComponent("jugger:paginator.init", "", [
    'name' => $pagerQueryName,
    'pageSize' => 36,
    'totalCount' => $totalCount,
]);
$mapperParams['limit'] = $pager['pageSize'];
$mapperParams['offset'] = $pager['offset'];

?>
<div class="element-search-catalog">

    <?php include __DIR__.'/form.php' ?>

    <div class="element-search-catalog__result">
        <p>
            Найдено продукции: <?= number_format($totalCount, 0, '.', ' ') ?>
        </p>
        <?php
        $APPLICATION->IncludeComponent("jugger:mapper.list.view", "catalog-products", [
            'class' => '\Bitrix\Iblock\ElementTable',
            'queryParams' => $mapperParams,
        ]);
        $APPLICATION->IncludeComponent("jugger:paginator.view", "", [
            'name' => $pagerQueryName,
            'pageSize' => $pager['pageSize'],
            'pageNow' => $pager['pageNow'],
            'pageMax' => $pager['pageMax'],
        ]);
        ?>
    </div>
</div>
