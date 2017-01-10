<?php

namespace Stevens\Schedule;

use Stevens\Core\CoreInterface;

class Schedule implements CoreInterface
{
	public static $counter = 2;

	public static function getCounter()
    {
	   	return self::$counter;
    }
}
