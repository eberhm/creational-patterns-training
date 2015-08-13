<?php

namespace Creational\AbstractFactory\PizzaIngredientsFactory;

use Creational\AbstractFactory\PizzaIngredient;

class NYStyle implements AbstractFactory
{
	public function createDough()
	{
		return new PizzaIngredient\Dough\ThinCrusty();
	}

	public function createSauce()
	{
		return new PizzaIngredient\Sauce\Marinara();
	}

	public function createCheese()
	{
		return new PizzaIngredient\Cheese\Regiano();
	}

	public function createVeggies()
	{
		return [
			new PizzaIngredient\Veggies\Garlic(),
			new PizzaIngredient\Veggies\Mushrooms(),
			new PizzaIngredient\Veggies\Onions()
		];
	}

	public function createPepperoni()
	{
		return new PizzaIngredient\Pepperoni\Chunks();
	}

	public function createClams()
	{
		return new PizzaIngredient\Clams\Fresh();
	}
}