<?php

class shop extends CModule
{
	var $MODULE_ID = "shop";
	var $MODULE_NAME = "Модуль магазина";

	public function DoInstall()
	{
		RegisterModule($this->MODULE_ID);
	}

	public function DoUninstall()
	{
		UnRegisterModule($this->MODULE_ID);
	}
}
