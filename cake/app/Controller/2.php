<?php

abstract class PhoneReplace
{
	protected static $phone_num = '080-0000-0000';
	public static function phoneReplace1()
	{
		return str_replace('-','',static::$phone_num);
	}
}
class PhoneReplaceUnder090 extends PhoneReplace
{
	protected static $phone_num = '090-0000-0000';
}

echo PhoneReplaceUnder090::phoneReplace1(); 

