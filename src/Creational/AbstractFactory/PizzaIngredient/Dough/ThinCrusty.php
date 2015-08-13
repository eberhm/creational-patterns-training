<?php

namespace Creational\AbstractFactory\PizzaIngredient\Dough;

use Creational\AbstractFactory\PizzaIngredient\Dough;

class ThinCrusty extends Dough
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Thin crusty dough';
	}
}