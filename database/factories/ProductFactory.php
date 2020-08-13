<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$productNameList = [
    '櫻桃',
    '番茄',
    '楊桃',
    '橘子',
    '草莓',
    '香蕉',
    '西瓜',
    '蘋果',
    '芭樂',
    '巧克力',
    '哈根達斯',
    '餅乾',
    '洋芋片',
    '泡麵',
    '冰淇淋',
    '冰棒',
    '礦泉水',
    '奶茶',
    '咖啡',
    '漢堡',
    '薯條',
];
$productNameListOriginal = $productNameList;

$factory->define(Product::class, function (Faker $faker) use (&$productNameList, $productNameListOriginal) {
    if (empty($productNameList)) {
        $productNameList = $productNameListOriginal;
    }

    return [
        'name' => tap($faker->randomElement($productNameList), function ($productName) use (&$productNameList) {
            Arr::forget($productNameList, array_search($productName, $productNameList));
        }),
        'description' => $faker->realText(30),
        'unit_price' => $faker->numberBetween(10, 1000),
        'is_featured' => $faker->boolean,
    ];
});
