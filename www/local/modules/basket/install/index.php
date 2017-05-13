<?php

class basket extends CModule
{
	var $MODULE_ID = "basket";
	var $MODULE_NAME = "Модуль корзины";

	public function DoInstall()
	{
		RegisterModule($this->MODULE_ID);
	}

	public function DoUninstall()
	{
		UnRegisterModule($this->MODULE_ID);
	}
}
