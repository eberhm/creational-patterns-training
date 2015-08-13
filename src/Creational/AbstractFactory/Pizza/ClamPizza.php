<?php

namespace Creational\AbstractFactory\Pizza;


class ClamPizza extends AnyPizza
{
	public function prepare()
	{
		$this->dough = $this->ingredientsFactory->createDough();
		$this->sauce = $this->ingredientsFactory->createSauce();
		$this->cheese = $this->ingredientsFactory->createCheese();
		$this->clams = $this->ingredientsFactory->createClams();
	}
}