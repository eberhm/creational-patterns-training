<?php

namespace Creational\FactoryMethod\PizzaStore;

use Creational\FactoryMethod\Pizza;

class NYStylePizzaStore extends AbstractPizzaStore
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
				return new Pizza\NYStyleCheesePizza();
			case Pizza\AnyPizza::TYPE_PEPPERONI;
				return new Pizza\NYStylePepperoniPizza();
			case Pizza\AnyPizza::TYPE_CLAM:
				return new Pizza\NYStyleClamPizza();
			default:
				throw new \Exception('Unknown type');
		}

	}
}