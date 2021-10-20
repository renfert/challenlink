<?php

namespace App;

use App\Item;

/**
 * Class GildedRose
 *
 * @package GildedRose
 */
class GildedRose
{
    /**
     * List of items
     *
     * @var
     */
    private static $items = [];

    /**
     * @var \GildedRose\ProductFactory
     */
    public static $product_factory;

    /**
     * GildedRose constructor.
     *
     * @param array $items
     * @param ProductFactory $productFactory
     */
    public function __construct(array $items, ProductFactory $productFactory)
    {
        
        static::$items = $items;
        static::$product_factory = $productFactory;
    }

    /**
     * Updates the quality and sell in of the items in the list
     *
     * @throws \App\Exceptions\FactoryClassNotFoundException
     */
    public static function updateQuality()
    {
   
        foreach (static::$items as $item) {
            static::$product_factory->build($item)->update();
        }

    }

    /**
     * Return Item Instance, used only in test
     *
     * @param array $name
     * @param array $quality
     * @param array $sellIn
     */

    public static function of($name, $quality, $sellIn) {
   
        return new Item($name, $quality, $sellIn);
    }

}

