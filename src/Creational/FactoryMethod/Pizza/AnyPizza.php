<?php

namespace Creational\FactoryMethod\Pizza;

abstract class AnyPizza
{
	const TYPE_CHEESE = 'cheese';
	const TYPE_PEPPERONI = 'pepperoni';
	const TYPE_CLAM = 'clam';

	/** @var  string */
	protected $name = 'Any Style pizza';

	/** @var  string */
	protected $dough = 'Regular dough';

	/** @var  string */
	protected $sauce = 'Regular Sauce';

	/** @var  string[] */
	protected $toppings = [
		'Plain mozzarella Cheese'
	];

	public function prepare()
	{
		echo PHP_EOL . 'Preparing any pizza: ' . $this->name;
		echo PHP_EOL . 'Tossing dough: ' . $this->dough;
		echo PHP_EOL . 'Adding souce: ' . $this->sauce;
		echo PHP_EOL . 'Adding toppings:';
		foreach ($this->toppings as $topping) {
			echo PHP_EOL . $topping;
		}

		echo PHP_EOL . 'ready for the oven!';

	}

	public function bake()
	{
		echo PHP_EOL . "Baking for 35 mins";
	}

	public function cut()
	{
		echo PHP_EOL . "Cutting in diagonal slices";
	}

	public function box()
	{
		echo PHP_EOL . "Boxing pizza";
	}
}