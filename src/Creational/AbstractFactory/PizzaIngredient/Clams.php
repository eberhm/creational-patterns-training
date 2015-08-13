<?php

namespace Creational\AbstractFactory\PizzaIngredient;

class Clams implements Ingredient
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Regular clams';
	}
}