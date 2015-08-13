<?php

namespace Creational\AbstractFactory\PizzaStore;

use Creational\AbstractFactory\Pizza\AnyPizza;
use Creational\AbstractFactory\Pizza;

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

	/**
	 * @param $type
	 * @param $ingredientFactory
	 * @return Pizza\AnyPizza
	 * @throws \Exception
	 */
	protected function createPizzaType($type, $ingredientFactory)
	{
		switch ($type) {
			case Pizza\AnyPizza::TYPE_CHEESE:
				$pizza = new Pizza\CheesePizza($ingredientFactory);
				break;
			case Pizza\AnyPizza::TYPE_PEPPERONI;
				$pizza = new Pizza\PepperoniPizza($ingredientFactory);
				break;
			case Pizza\AnyPizza::TYPE_CLAM:
				$pizza = new Pizza\ClamPizza($ingredientFactory);
				break;
			case Pizza\AnyPizza::TYPE_VEGGIE:
				$pizza = new Pizza\VeggiesPizza($ingredientFactory);
				break;
			default:
				throw new \Exception('Unknown type');
		}

		return $pizza;
	}
}