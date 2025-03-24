<?php
require __DIR__ . '/vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create(); //ini adalah instance object

echo $faker->name . '<br>';
echo $faker->address . '<br>';
?>