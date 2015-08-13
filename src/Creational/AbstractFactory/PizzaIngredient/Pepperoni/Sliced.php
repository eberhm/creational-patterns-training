<?php

namespace Creational\AbstractFactory\PizzaIngredient\Pepperoni;

use Creational\AbstractFactory\PizzaIngredient\Pepperoni;

class Sliced extends Pepperoni
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Sliced pepperoni';
	}
}