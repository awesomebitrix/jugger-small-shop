<?php

namespace shop\model;

/**
 * Приход/уход
 */
class ComingCare
{
	public $date;
	public $count;
	public $comment;

	// склад
	protected $store;

	public function setStore(Store $value)
	{
		$this->store = $value;
	}

	public function getStore()
	{
		return $this->store;
	}
}
