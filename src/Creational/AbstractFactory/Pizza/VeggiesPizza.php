<?php

namespace Creational\AbstractFactory\Pizza;


class VeggiesPizza extends AnyPizza
{
	public function prepare()
	{
		$this->dough = $this->ingredientsFactory->createDough();
		$this->sauce = $this->ingredientsFactory->createSauce();
		$this->cheese = $this->ingredientsFactory->createCheese();
		$this->veggies = $this->ingredientsFactory->createVeggies();
	}
}