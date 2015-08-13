<?php

namespace Creational\AbstractFactory\PizzaIngredientsFactory;

use Creational\AbstractFactory\PizzaIngredient;

class ChicagoStyle implements AbstractFactory
{
	public function createDough()
	{
		return new PizzaIngredient\Dough\DoubleThick();
	}

	public function createSauce()
	{
		return new PizzaIngredient\Sauce\PlumTomato();
	}

	public function createCheese()
	{
		return new PizzaIngredient\Cheese\Mozzarella();
	}

	public function createVeggies()
	{
		return [
			new PizzaIngredient\Veggies\Garlic(),
			new PizzaIngredient\Veggies\Onions(),
			new PizzaIngredient\Veggies\RedPepper()
		];
	}

	public function createPepperoni()
	{
		return new PizzaIngredient\Pepperoni\Sliced();
	}

	public function createClams()
	{
		return new PizzaIngredient\Clams\Frozen();
	}
}