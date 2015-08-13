<?php

namespace Creational\AbstractFactory\PizzaIngredient\Veggies;

use Creational\AbstractFactory\PizzaIngredient\Veggies;

class Garlic extends Veggies
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Garlic';
	}
}