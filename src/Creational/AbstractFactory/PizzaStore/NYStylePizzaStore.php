<?php

namespace Creational\AbstractFactory\PizzaStore;

use Creational\AbstractFactory\Pizza;
use Creational\AbstractFactory\PizzaIngredientsFactory;

class NYStylePizzaStore extends AbstractPizzaStore
{

	/**
	 * @param string $type
	 * @return Pizza\AnyPizza
	 * @throws \Exception
	 */
	protected function createPizza($type)
	{
		$pizza = $this->createPizzaType($type, new PizzaIngredientsFactory\NYStyle());
		$pizza->setName('New York Style ' . $type . ' pizza');
		return $pizza;
	}
}