<?php

namespace Creational\AbstractFactory\PizzaIngredientsFactory;

use Creational\AbstractFactory\PizzaIngredient;

interface AbstractFactory
{
	/**
	 * @return PizzaIngredient\Dough
	 */
	public function createDough();

	/**
	 * @return PizzaIngredient\Sauce
	 */
	public function createSauce();

	/**
	 * @return PizzaIngredient\Cheese
	 */
	public function createCheese();

	/**
	 * @return PizzaIngredient\Veggies[]
	 */
	public function createVeggies();

	/**
	 * @return PizzaIngredient\Pepperoni
	 */
	public function createPepperoni();

	/**
	 * @return PizzaIngredient\Clams
	 */
	public function createClams();
}