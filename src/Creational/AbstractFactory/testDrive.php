<?php


require_once __DIR__ . '/../../../vendor/autoload.php';

$factory = new Creational\AbstractFactory\PizzaStore\NYStylePizzaStore();
$pizza = $factory->orderPizza(\Creational\AbstractFactory\Pizza\AnyPizza::TYPE_CHEESE);

echo $pizza;

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

$factory = new Creational\AbstractFactory\PizzaStore\ChicagoStylePizzaStore();
$pizza = $factory->orderPizza(\Creational\AbstractFactory\Pizza\AnyPizza::TYPE_CHEESE);

echo $pizza;

echo PHP_EOL;
