<?php

namespace shop\repo;

use shop\factory\ProductFactory;
use Bitrix\Iblock\ElementTable;

class ProductRepo
{
	public function __construct()
	{
		\CModule::includeModule('iblock');
	}

	public function getRow(array $params = []): ?Product
	{
		$row = ElementTable::getList($params)->Fetch();
		return $row ? ProductFactory::createByElementTable($row) : null;
	}

	public function getList(array $params = []): array
	{
		$items = [];
		$result = ElementTable::getList($params);
		while ($row = $result) {
			$items[] = ProductFactory::createByElementTable($row);
		}
		return $items;
	}
}
