<?php

namespace Creational\AbstractFactory\PizzaIngredient\Pepperoni;

use Creational\AbstractFactory\PizzaIngredient\Pepperoni;

class Chunks extends Pepperoni
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Pepperoni chunks';
	}
}