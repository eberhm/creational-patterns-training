<?php

namespace Creational\AbstractFactory\PizzaIngredient\Dough;

use Creational\AbstractFactory\PizzaIngredient\Dough;

class DoubleThick extends Dough
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Double Thick dough';
	}
}