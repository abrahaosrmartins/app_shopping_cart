<?php

namespace Abrsr\AppShoppingCart;

class ShopCart
{
    // ATTRIBUTES
    private $items;
    private $status;
    private $totalValue;

    // METHODS=
    public function __construct()
    {
        $this->items = [];
        $this->status = 'open';
        $this->totalValue = 0;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param string $item
     * @param float $value
     * @return bool
     */
    public function addItems(string $item, float $value): bool
    {
        $this->items[] = [
            'item' => $item,
            'value' => $value
        ];

        $this->totalValue += $value;
        return true;
    }

    /**
     * @return int
     */
    public function getTotalValue(): int
    {
        return $this->totalValue;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return bool
     */
    public function updateStatus(): bool
    {
        if($this->validateCart()) {
            $this->status = 'confirmed';
            $this->sendConfirmationEmail();

            return true;
        }

        return false;
    }

    /**
     * @return void
     */
    public function sendConfirmationEmail()
    {
        echo "<br />Confirmation e-mail sent!<br />";
    }

    /**
     * @return bool
     */
    public function validateCart(): bool
    {
        return count($this->items) > 0;
    }
}