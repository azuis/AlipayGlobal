<?php

namespace AlipayGlobal\Alipay\Facades;

use Illuminate\Support\Facades\Facade;

class AlipayMobile extends Facade
{

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'alipayglobal.mobile';
	}
}