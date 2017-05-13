<?php

namespace shop\model;

class Product
{
	public $name;
	public $desc;
	public $active;

	protected $skues = [];

	public function addSku(ProductSku $sku)
	{
		$this->skues[] = $sku;
	}

	public function getSkuList()
	{
		return $this->skues;
	}
}
