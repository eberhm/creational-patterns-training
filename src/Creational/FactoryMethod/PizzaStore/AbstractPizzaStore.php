<?php

namespace Creational\FactoryMethod\PizzaStore;

use Creational\FactoryMethod\Pizza\AnyPizza;

abstract class AbstractPizzaStore
{
	/**
	 * @param string $type
	 * @return AnyPizza
	 */
	final public function orderPizza($type)
	{
		$pizza = $this->createPizza($type);

		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();

		return $pizza;
	}

	/**
	 * @param string $type
	 * @return AnyPizza
	 */
	abstract protected function createPizza($type);
}