<?php

namespace shop\factory;

use shop\model\Product;
use shop\repo\ProductSkuRepo;

class ProductFactory
{
	public static function createByElementTable(array $row)
	{
		$model = new Product();
		$model->id = $row['ID'];
		$model->name = $row['NAME'];
		$model->desc = $row['DETAIL_TEXT'];
		$model->active = $row['ACTIVE'] == 'Y';

		$items = ProductSkuRepo::getListByProductId($model->id);
		foreach ($items as $sku) {
			$model->addSku($sku);
		}

		return $model;
	}
}
