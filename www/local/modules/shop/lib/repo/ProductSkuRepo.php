<?php

namespace shop\repo;

use shop\factory\ProductSkuFactory;

use Bitrix\Main\Db\SqlExpression;
use Bitrix\Iblock\ElementTable;

class ProductSkuRepo
{
	public function __construct()
	{
		\CModule::includeModule('iblock');
	}

	public function getRow(array $params = []): ?ProductSku
	{
		$row = ElementTable::getList($params)->Fetch();
		return $row ? ProductSkuFactory::createByElementTable($row) : null;
	}

	public function getList(array $params = []): array
	{
		$items = [];
		$result = ElementTable::getList($params);
		while ($row = $result) {
			$items[] = ProductSkuFactory::createByElementTable($row);
		}
		return $items;
	}

	public function getListByProductId(int $productId)
	{
		$propertyCode = 'product';
		$sql = "SELECT iblock_element_id FROM b_iblock_element_property WHERE iblock_property_id IN (SELECT id FROM b_iblock_property WHERE code = '?s') AND value = ?i";

		return $this->getList([
			'filter' => [
				'@ID' => new SqlExpression($sql, $propertyCode, $productId),
			],
		]);
	}
}
