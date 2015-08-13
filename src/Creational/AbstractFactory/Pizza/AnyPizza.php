<?php

namespace Creational\AbstractFactory\Pizza;

use Creational\AbstractFactory\PizzaIngredient;
use Creational\AbstractFactory\PizzaIngredientsFactory;

abstract class AnyPizza
{
	const TYPE_CHEESE = 'cheese';
	const TYPE_PEPPERONI = 'pepperoni';
	const TYPE_CLAM = 'clam';
	const TYPE_VEGGIE = 'veggie';

	/** @var  string */
	protected $name = 'Any Style pizza';

	/** @var  PizzaIngredient\Dough */
	protected $dough;

	/** @var  PizzaIngredient\Sauce */
	protected $sauce;

	/** @var  PizzaIngredient\Cheese */
	protected $cheese;

	/** @var  PizzaIngredient\Pepperoni */
	protected $pepperoni;

	/** @var  PizzaIngredient\Clams */
	protected $clams;

	/** @var  PizzaIngredient\Veggies[] */
	protected $veggies = [];


	/**
	 * @var PizzaIngredientsFactory\AbstractFactory
	 */
	protected $ingredientsFactory;

	/**
	 * AnyPizza constructor.
	 * @param PizzaIngredientsFactory\AbstractFactory $ingredientsFactory
	 */
	public function __construct(PizzaIngredientsFactory\AbstractFactory $ingredientsFactory)
	{
		$this->ingredientsFactory = $ingredientsFactory;
	}


	abstract public function prepare();

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

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;
	}

	/**
	 * @return array
	 */
	public function __toString()
	{
		$res =  [PHP_EOL . 'Pizza DONE: ' . $this->getName()];

		if ($this->dough) $res[] = $this->dough->getName();
		if ($this->sauce) $res[] = $this->sauce->getName();
		if ($this->cheese) $res[] = $this->cheese->getName();
		if ($this->pepperoni) $res[] = $this->clams->getName();
		if ($this->clams) $res[] = $this->clams->getName();
		if (!empty($this->veggies)) {
			foreach ($this->veggies as $veggie) {
				$res[] = $veggie->getName();
			}
		}

		return implode(PHP_EOL, $res);
	}
}