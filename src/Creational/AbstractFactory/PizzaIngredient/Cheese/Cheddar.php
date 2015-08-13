<?php

namespace Creational\AbstractFactory\PizzaIngredient\Cheese;

use Creational\AbstractFactory\PizzaIngredient\Cheese;

class Cheddar extends Cheese
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Cheddar Cheese';
	}
}