<?php

require __DIR__ . '/vendor/autoload.php';

use Abrsr\AppShoppingCart\ShopCart;

$cart1 = new ShopCart();

print_r($cart1->getItems());
echo "<br />";

echo "Total amount: " . $cart1->getTotalValue();
echo "<br />";

//$cart1->addItems('Bike', 750.10);
//$cart1->addItems('Freezer', 1952.10);
//$cart1->addItems('Carpet', 350.20);

print_r($cart1->getItems());
echo "<br />";

echo "Updated Amount: " . $cart1->getTotalValue();
echo "<br />";

echo "Status: " . $cart1->getStatus();
echo "<br />";

if ($cart1->validateCart()) {
    echo 'Success!';
} else {
    echo 'Something went wrong! Your cart doesn\'t have any items';
}
echo "<br />";

$cart1->updateStatus();
echo "Status: " . $cart1->getStatus();
