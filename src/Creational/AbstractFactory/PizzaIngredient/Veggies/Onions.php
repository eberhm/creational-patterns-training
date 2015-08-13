<?php

namespace Creational\AbstractFactory\PizzaIngredient\Veggies;

use Creational\AbstractFactory\PizzaIngredient\Veggies;

class Onions extends Veggies
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Onions';
	}
}