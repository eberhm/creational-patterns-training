<?php

namespace Creational\AbstractFactory\PizzaIngredient\Cheese;

use Creational\AbstractFactory\PizzaIngredient\Cheese;

class Regiano extends Cheese
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Regiano Cheese';
	}
}