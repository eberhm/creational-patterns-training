<?php

namespace Creational\AbstractFactory\PizzaIngredient\Clams;

use Creational\AbstractFactory\PizzaIngredient\Clams;

class Frozen extends Clams
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Frozen Clams';
	}
}