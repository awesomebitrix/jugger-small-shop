<?php

namespace shop\model;

class Order
{
	protected $buyer;
	protected $status;
	protected $productSkues = [];

	public function setBuyer(Buyer $value)
	{
		$this->buyer = $value;
	}

	public function getBuyer()
	{
		return $this->buyer;
	}

	public function setStatus(OrderStatus $value)
	{
		$this->status = $value;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function addProductSku(ProductSku $product, int $count, ?int $price = null)
	{
		$key = md5(serialize($product));
		$this->productSkues[$key] = [
			'count' => $count,
			'price' => $price ?? $product->price,
			'product' => $product,
		];
	}

	public function getProductSkues()
	{
		return $this->productSkues;
	}
}
