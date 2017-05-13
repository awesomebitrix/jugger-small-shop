<?php

namespace shop\factory;

use shop\model\ProductSku;

class ProductSkuFactory
{
	public static function createByElementTable(array $row)
	{
		$model = new ProductSku();
		$model->id = $row['ID'];
		$model->name = $row['NAME'];
		$model->desc = $row['DETAIL_TEXT'];
		$model->active = $row['ACTIVE'] == 'Y';

		return $model;
	}
}
