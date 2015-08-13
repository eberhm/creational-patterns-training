<?php

namespace Creational\AbstractFactory\PizzaIngredient\Sauce;

use Creational\AbstractFactory\PizzaIngredient\Sauce;

class Marinara extends Sauce
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Marinara sauce';
	}
}