<?php

namespace Creational\AbstractFactory\Pizza;


use Creational\AbstractFactory\PizzaIngredient;

class CheesePizza extends AnyPizza
{
	public function prepare()
	{
		$this->dough = $this->ingredientsFactory->createDough();
		$this->sauce = $this->ingredientsFactory->createSauce();
		$this->cheese = $this->ingredientsFactory->createCheese();
	}
}