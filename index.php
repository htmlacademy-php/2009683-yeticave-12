<?php
function formatPrice(float $price)
{
    $price = ceil($price);
    if ($price > 1000) {
        $priceFormat = number_format($price, 0, '.', ' ');
    } else {
        $priceFormat = $price;
    }
    $priceText = "{$priceFormat} ₽";
    return $priceText;
}

$is_auth = rand(0, 1);

$userName = 'Василий'; // укажите здесь ваше имя
$categories = [
    'Доски и лыжи',
    'Крепления',
    'Ботинки',
    'Одежда',
    'Инструменты',
    'Разное'
];
$products =
    [
        [
            'name' => '2014 Rossignol District Snowboard',
            'cat' => 'Доски и лыжи',
            'cost' => '10999',
            'link' => 'img/lot-1.jpg'
        ],
        [
            'name' => 'DC Ply Mens 2016/2017 Snowboard',
            'cat' => 'Доски и лыжи',
            'cost' => '159999',
            'link' => 'img/lot-2.jpg'
        ],
        [
            'name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
            'cat' => 'Крепления',
            'cost' => '8000',
            'link' => 'img/lot-3.jpg'
        ],
        [
            'name' => 'Ботинки для сноуборда DC Mutiny Charocal',
            'cat' => 'Ботинки',
            'cost' => '10999',
            'link' => 'img/lot-4.jpg'
        ],
        [
            'name' => 'Куртка для сноуборда DC Mutiny Charocal',
            'cat' => 'Одежда',
            'cost' => '7500',
            'link' => 'img/lot-5.jpg'
        ],
        [
            'name' => 'Маска Oakley Canopy',
            'cat' => 'Разное',
            'cost' => '5400',
            'link' => 'img/lot-6.jpg'
        ],
    ];

require('helpers.php');
$mainData = [
    'userName' => $userName,
    'categories' => $categories,
    'products' => $products,
];
$content = htmlspecialchars(include_template('main.php', $mainData));

$LayoutData = [
    'title' => 'Каталог Yeti Cave',
    'is_auth' => $is_auth,
    'content' => $content,
    'userName' => $userName,
    'categories' => $categories,
    'products' => $products,
];
$info = include_template('Layout.php', $LayoutData);
print ($info);


?>
