<?php

namespace Creational\AbstractFactory\PizzaIngredient\Clams;

use Creational\AbstractFactory\PizzaIngredient\Clams;

class Fresh extends Clams
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Fresh Clams';
	}
}