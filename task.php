<?php

/*

// слайд 8
$animals = ['Tiger', 'Dog', 'Cat', 'Elephant'];

foreach ($animals as $animal){
    echo "<p>$animal</p>";
}
*/

/*

// слайд 9
$fruits = ['Киви', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];

foreach ($fruits as $index => $fruit){
    echo "<h3>$index: $fruit</h3>";
}
*/

/*

// слайд 10
$fruits = ['Киви', 'Кокос', 'Апельсин', 'Банан', 'Яблоко'];

foreach ($fruits as $index => $fruit){
    echo "<h3>". $index+1 .": $fruit</h3>";
}
*/

/*

// слайд 11
$menu = [
    'index.php' => 'Главная страница',
    'news.php' => 'Новости',
    'shop.php' => 'Магазин',
    'about.php' => 'О компании',
];

foreach ($menu as $link => $description){
    echo "<a href='$link'>$description</a>";
}
*/

/*

// слайд 12
$students = [
    ['first_name' => 'Иван', 'last_name' => 'Иванов', 'age' => 32],
    ['first_name' => 'Анна', 'last_name' => 'Петрова', 'age' => 21],
    ['first_name' => 'Светлана', 'last_name' => 'Сидорова', 'age' => 25],
];

foreach ($students as $student){
    echo "<p>Имя: $student[first_name]. Фамилия: $student[last_name].
         Возраст: $student[age]</p>";
}
*/

/*

// слайд 13
$animals = ['Tiger', 'Dog', 'Cat', 'Elephant'];

for($i = 0; $i < count($animals); $i++){
    echo "<p>$animals[$i]</p>";
}
*/

/*

// слайд 14
$animals = ['Tiger', 'Dog', 'Cat', 'Elephant'];

$animals_str = '';
for($i = 0; $i < count($animals); $i++){
    $animals_str .= "<p>$animals[$i]</p>";
}
echo $animals_str;
*/

/*

// слайд 15
$numbers = [5, 3, 8, 5, 2, 5, 9];

$sum = 0;
for($i = 0; $i < count($numbers); $i++){
    $sum += $numbers[$i];
}
echo $sum;
*/

/*

// слайд 16
$numbers = [5, 3, 8, 5, 2, 5, 9];

$sum = 0;
foreach ($numbers as $number){
    $sum += $number;
}
echo $sum;
*/

/*

// слайд 17
$cart = [
    ['title' => 'Зубная щетка', 'qty' => 2, 'price' => 5],
    ['title' => 'Зубная паста', 'qty' => 1, 'price' => 8],
    ['title' => 'Зубная нить', 'qty' => 4, 'price' => 3],
];

$sum = 0;
foreach ($cart as $cart_item){
    $sum += $cart_item['qty'] * $cart_item['price'];
}
echo $sum;
*/

/*

// слайд 18
$cart = [
    ['title' => 'Зубная щетка', 'qty' => 2, 'price' => 5],
    ['title' => 'Зубная паста', 'qty' => 1, 'price' => 8],
    ['title' => 'Зубная нить', 'qty' => 4, 'price' => 3],
];
echo "<div class='cart'>";
foreach ($cart as $index => $cart_item){
    echo "<div class='cart-item cart-item-". $index+1 ."'>
            <p>$cart_item[title]</p>
            <span>Количество: $cart_item[qty]</span>
            <span>Цена: $cart_item[price]</span>
          </div>";
}
echo "</div>";
*/

/*

// слайд 19
$cart = [
    ['title' => 'Зубная щетка', 'qty' => 2, 'price' => 5],
    ['title' => 'Зубная паста', 'qty' => 1, 'price' => 8],
    ['title' => 'Зубная нить', 'qty' => 4, 'price' => 3],
];
?>
<div class='cart'>
    <?php foreach ($cart as $index => $cart_item):?>
        <div class='cart-item cart-item-<?=$index+1?>'>
            <p><?=$cart_item['title']?></p>
            <span>Количество: <?=$cart_item['qty']?></span>
            <span>Цена: <?=$cart_item['price']?></span>
        </div>
    <?php endforeach;?>
</div>

*/