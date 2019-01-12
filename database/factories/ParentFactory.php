<?php

use Faker\Generator as Faker;

$factory->define(App\Parents::class, function (Faker $faker) {
	return [
		'xm'   => $faker->name(),
		'zjlx' => '1-居民身份证',
		'zjhm' => $faker->creditCardNumber(),
		'rxrq' => $faker->date('Ymd'),
		'xjzt' => '注册学籍',
	];
});
