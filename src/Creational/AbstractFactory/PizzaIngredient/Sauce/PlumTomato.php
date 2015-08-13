<?php

namespace Creational\AbstractFactory\PizzaIngredient\Sauce;

use Creational\AbstractFactory\PizzaIngredient\Sauce;

class PlumTomato extends Sauce
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Plum Tomato sauce';
	}
}