<?php

namespace Creational\AbstractFactory\PizzaIngredient\Veggies;

use Creational\AbstractFactory\PizzaIngredient\Veggies;

class RedPepper extends Veggies
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'RedPepper';
	}
}