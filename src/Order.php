<?php

namespace App;

class Order
{
    /**
     * @var string $status
     * @var ShopCart $shopCart
     * @var float $orderValue
     */
    private string $status;
    private ShopCart $shopCart;
    private float $orderValue;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->status = 'open';
        $this->shopCart = new ShopCart();
        $this->orderValue = 0;
    }

    /**
     * Get shop cart
     *
     * @return ShopCart
     */
    public function getCart(): ShopCart
    {
        return $this->shopCart;
    }

    /**
     * Get order status
     *
     * @return string
     */
    public function getOrderStatus(): string
    {
        return $this->status;
    }

    /**
     * Updates order status
     *
     * @param string $status
     */
    public function setOrderStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Confirm Order
     *
     * @return bool
     */
    public function confirmOrder(): bool
    {
        if ($this->shopCart->validateCart()) {
            $this->setOrderStatus('confirmed');

            return true;
        }

        return false;
    }
}
