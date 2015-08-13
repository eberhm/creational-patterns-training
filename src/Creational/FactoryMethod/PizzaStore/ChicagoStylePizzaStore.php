<?php

namespace Creational\FactoryMethod\PizzaStore;

use Creational\FactoryMethod\Pizza;

class ChicagoStylePizzaStore extends AbstractPizzaStore
{

	/**
	 * @param string $type
	 * @return Pizza\AnyPizza
	 * @throws \Exception
	 */
	protected function createPizza($type)
	{
		switch($type) {
			case Pizza\AnyPizza::TYPE_CHEESE:
				return new Pizza\ChicagoStyleCheesePizza();
			case Pizza\AnyPizza::TYPE_PEPPERONI;
				return new Pizza\ChicagoStylePepperoniPizza();
			case Pizza\AnyPizza::TYPE_CLAM:
				return new Pizza\ChicagoStyleClamPizza();
			default:
				throw new \Exception('Unknown type');
		}

	}
}