<?php

namespace Creational\AbstractFactory\PizzaIngredient;

class Veggies implements Ingredient
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'Nay vegetable';
	}
}