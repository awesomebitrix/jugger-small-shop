<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->RestartBuffer();

use Bitrix\Iblock\ElementTable;
use jugger\bitrix\iblock\Element;

CModule::includeModule("iblock");

$start = microtime(true);
$result = ElementTable::getList([
	'filter' => [
		'IBLOCK_ID' => CATALOG_ID,
	],
]);

header('Content-type: text/plain');

ob_start();
while ($row = $result->Fetch()) {
	$props = Element::getProperties($row['ID'], ['images', 'images_src']);

	if (empty($props['images_src'])) {
		continue;
	}
	elseif (isset($props['images'])) {
		continue;
	}

    foreach ($props['images_src'] as $src) {
        echo "<img src='{$src}'>";
    }
}

echo ob_get_clean();
