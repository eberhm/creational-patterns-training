<?php

namespace Creational\AbstractFactory\PizzaStore;

use Creational\AbstractFactory\Pizza;
use Creational\AbstractFactory\PizzaIngredientsFactory;

class ChicagoStylePizzaStore extends AbstractPizzaStore
{
	/**
	 * @param string $type
	 * @return Pizza\AnyPizza
	 * @throws \Exception
	 */
	protected function createPizza($type)
	{
		$pizza = $this->createPizzaType($type, new PizzaIngredientsFactory\ChicagoStyle());
		$pizza->setName('Chicago Style ' . $type . ' pizza');
		return $pizza;
	}
}