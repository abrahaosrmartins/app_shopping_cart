<?php

use App\EmailService;
use App\Item;
use App\Order;
use App\ShopCart;

require __DIR__ . '/vendor/autoload.php';

$cart1 = new ShopCart();

$order = new Order();
//--------------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescription('Cup Holder');
$item1->setValue(4.55);

$item2->setDescription('Lamp');
$item2->setValue(8.32);
//--------------------------------

echo '<h4>Initial Order</h4>';
echo '<pre>';
print_r($order);
echo '</pre>';
//---------------------------------

$order->getCart()->addItem($item1);
$order->getCart()->addItem($item2);
//--------------------------------

echo '<h4>Order updated</h4>';
echo '<pre>';
print_r($order);
echo '</pre>';
//---------------------------------

echo '<h4>Order items</h4>';
echo '<pre>';
print_r($order->getCart()->getItems());
echo '</pre>';
//---------------------------------

echo '<h4>Order total value</h4>';
$total = 0.00;
foreach ($order->getCart()->getItems() as $key => $item) {
    $total += $item->getValue();
}
echo $total;
//---------------------------------

echo '<h4>Is the order cart, valid?</h4>';
echo $order->getCart()->validateCart();
//---------------------------------

echo '<h4>Order Status</h4>';
echo $order->getOrderStatus();
//---------------------------------

echo '<h4>Order confirm</h4>';
echo $order->confirmOrder();
//---------------------------------

echo '<h4>Email Send</h4>';
if ($order->getOrderStatus() == 'confirmed') {
    echo EmailService::sendEmail();
};
//---------------------------------


/*
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
*/
