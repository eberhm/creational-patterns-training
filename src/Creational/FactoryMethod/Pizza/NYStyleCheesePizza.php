<?php

namespace Creational\FactoryMethod\Pizza;


class NYStyleCheesePizza extends AnyPizza
{
	/** @var  string */
	protected $name = 'New York Style Sauce and Cheese pizza';

	/** @var  string */
	protected $dough = 'Thin crust dough';

	/** @var  string */
	protected $sauce = 'Marinara Sauce';

	/** @var  string[] */
	protected $toppings = [
		'Grated Reggiano Cheese'
	];
}