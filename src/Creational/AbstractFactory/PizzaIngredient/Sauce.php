<?php

namespace Creational\AbstractFactory\PizzaIngredient;

class Sauce implements Ingredient
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Regular Sauce';
	}
}