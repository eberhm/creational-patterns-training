<?php

namespace Creational\AbstractFactory\Pizza;


class PepperoniPizza extends AnyPizza
{
	public function prepare()
	{
		$this->dough = $this->ingredientsFactory->createDough();
		$this->sauce = $this->ingredientsFactory->createSauce();
		$this->cheese = $this->ingredientsFactory->createCheese();
		$this->pepperoni = $this->ingredientsFactory->createPepperoni();
	}
}