<?php

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    /**
     * @return void
     */
    public function testItemInitialState()
    {
        $item = new Item();

        $this->assertEquals('', $item->getDescription());
        $this->assertEquals(0, $item->getValue());
    }

    /**
     * @return void
     */
    public function testUpdateItemDescription()
    {
        $description = 'Plastic Chair';
        $item = new Item();

        $item->setDescription($description);
        $this->assertEquals($description, $item->getDescription());
    }

    /**
     * @return void
     */
    public function testValidItem()
    {
        $item = new Item();
        $item->setDescription('HDMI Cable');
        $item->setValue(20.55);
        $this->assertTrue($item->validItem());
    }

    /**
     * @return void
     */
    public function testInvalidItemDescription()
    {
        $item = new Item();
        $item->setDescription('');
        $item->setValue(20.55);
        $this->assertEquals(false, $item->validItem());
    }

    /**
     * @return void
     */
    public function testInvalidItemValue()
    {
        $item = new Item();
        $item->setDescription('HDMI Cable');
        $item->setValue(0);
        $this->assertFalse($item->validItem());
    }
}