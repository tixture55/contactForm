<?php

abstract class PhoneReplace
{
	protected static $phone_num;
	protected static function phoneReplace()
	{
		return static::$phone_num = str_replace('-','',$phone_num);
	}

	class PhoneReplaceUnder4 extends PhoneReplace
	{
		protected static $phone_num = '090-0000-0000';
	}

	echo PhoneReplaceUnder4::phoneReplace(); 

