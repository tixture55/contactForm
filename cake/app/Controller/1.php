<?php

abstract class Car
{
	    protected static $price;
			    public static function getFormattedPrice()
					    {
								        return number_format(static::$price);
												    }
}

class NissanNote extends Car
{
	    protected static $price = 1400000;
}

echo NissanNote::getFormattedPrice();
