<?php


require_once __DIR__ . '/../../../vendor/autoload.php';

$factory = new Creational\FactoryMethod\PizzaStore\NYStylePizzaStore();
$pizza = $factory->orderPizza(\Creational\FactoryMethod\Pizza\AnyPizza::TYPE_CHEESE);

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$factory = new Creational\FactoryMethod\PizzaStore\ChicagoStylePizzaStore();
$pizza = $factory->orderPizza(\Creational\FactoryMethod\Pizza\AnyPizza::TYPE_CHEESE);

echo PHP_EOL;
