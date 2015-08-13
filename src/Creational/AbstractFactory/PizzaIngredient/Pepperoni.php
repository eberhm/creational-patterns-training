<?php

namespace Creational\AbstractFactory\PizzaIngredient;

class Pepperoni implements Ingredient
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Regular pepperoni';
	}
}