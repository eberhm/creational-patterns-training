<?php

namespace Creational\AbstractFactory\PizzaIngredient;

class Dough implements Ingredient
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Regular Dough';
	}
}