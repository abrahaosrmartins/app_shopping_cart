<?php

namespace App;

class Item
{
    /**
     * @var string $description
     * @var float $value
     */
    private string $description;
    private float $value;

    /**
     * Class constructor
     */
    public function __construct()
    {
        $this->description = '';
        $this->value = 0;
    }

    /**
     * Get item description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Get item value
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Updates item description
     *
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Updates item value
     *
     * @param float $value
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    /**
     * Validates item
     *
     * @return bool
     */
    public function validItem(): bool
    {
        if ($this->description == '') {
            return false;
        }
        if ($this->value <= 0) {
            return false;
        }

        return true;
    }
}
