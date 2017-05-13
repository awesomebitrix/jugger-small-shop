<?php

die();

// require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
// $APPLICATION->RestartBuffer();
//
// use Bitrix\Iblock\ElementTable;
// use jugger\bitrix\iblock\Element;
//
// CModule::includeModule("iblock");
//
// session_start();
//
// $keyOffset = "offsetsflkmsfgkldfmg";
// $limit = 2;
// $offset = $_SESSION[$keyOffset] ?? 0;
//
// $result = ElementTable::getList([
// 	'filter' => [
// 		'IBLOCK_ID' => CATALOG_ID,
// 	],
// 	'limit' => $limit,
// 	'offset' => $offset,
// ]);
//
// $DB->StartTransaction();
//
// try {
// 	while ($row = $result->Fetch()) {
// 		$offset++;
// 		$props = Element::getProperties($row['ID'], ['images', 'images_src']);
//
// 		if (empty($props['images_src'])) {
// 			continue;
// 		}
// 		elseif (isset($props['images'])) {
// 			continue;
// 		}
//
// 		$images = array_map(
// 			function($src) {
// 				sleep(1);
// 				$item = CFile::MakeFileArray($src);
// 			    if (strpos($item['type'], 'image') === false) {
// 			        return null;
// 			    }
// 			    return $item;
// 			},
// 			$props['images_src']
// 		);
// 		$images = array_filter($images);
//
// 		echo "Product: {$row['ID']}; Images count: ". count($images) ."<br>";
//
// 		CIBlockElement::SetPropertyValuesEx($row['ID'], $row['IBLOCK_ID'], compact('images'));
// 	}
// 	$DB->Commit();
// }
// catch (\Exception $ex) {
// 	$DB->RollBack();
// 	throw $ex;
// }
//
// $isEnd = $_SESSION[$keyOffset] == $offset;
//
// $_SESSION[$keyOffset] = $offset;
// session_commit();
//
// ?>
//
// Ended: <?= $offset ?>
//
// <?php if (!$isEnd): ?>
// 	<script type="text/javascript">
// 	setTimeout(function() {
// 		location.reload();
// 	}, 1000);
// 	</script>
// <?php endif; ?>
