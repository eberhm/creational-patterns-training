<?php

namespace Creational\AbstractFactory\PizzaIngredient\Cheese;

use Creational\AbstractFactory\PizzaIngredient\Cheese;

class Mozzarella extends Cheese
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Mozzarella Cheese';
	}
}