<?php

namespace Creational\AbstractFactory\PizzaIngredient\Veggies;

use Creational\AbstractFactory\PizzaIngredient\Veggies;

class Mushrooms extends Veggies
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Mushrooms';
	}
}