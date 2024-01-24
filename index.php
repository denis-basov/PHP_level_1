<?php
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
