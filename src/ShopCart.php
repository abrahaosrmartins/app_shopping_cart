<?php

namespace App;

class ShopCart
{
   /**
    * @var array $items
    */
   private array $items;

   /**
    * Class constructor
    */
   public function __construct()
   {
       $this->items = [];
   }

    /**
     * Get cart items
     *
     * @return array
     */
   public function getItems(): array
   {
       return $this->items;
   }

    /**
     * Add new item to cart
     *
     * @param Item $item
     * @return bool
     */
   public function addItem(Item $item): bool
   {
       $this->items[] = $item;
       return true;
   }

    /**
     * Validates cart items
     *
     * @return bool
     */
   public function validateCart(): bool
   {
       return count($this->items) > 0;
   }
}
