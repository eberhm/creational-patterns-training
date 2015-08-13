<?php

namespace Creational\FactoryMethod\Pizza;


class ChicagoStyleCheesePizza extends AnyPizza
{
	/** @var  string */
	protected $name = 'Chicago Style Deep Dish Cheese pizza';

	/** @var  string */
	protected $dough = 'Extra Thick crust dough';

	/** @var  string */
	protected $sauce = 'Plum tomato Sauce';

	/** @var  string[] */
	protected $toppings = [
		'Shredded Mozzarella Cheese'
	];
}