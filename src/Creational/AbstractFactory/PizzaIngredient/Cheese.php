<?php

namespace Creational\AbstractFactory\PizzaIngredient;

class Cheese implements Ingredient
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Regular Cheese';
	}
}