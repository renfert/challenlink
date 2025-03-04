<?php

namespace App\Products;

use App\Product;

/**
 * Class Conjured
 *
 * @package \GildedRose\Products
 */
class Conjured extends Product
{
    /**
     * The name of the product
     */
    const NAME = 'Conjured Mana Cake';

    /**
     * Quality increases by 2 over time
     *
     * @var int
     */
    protected static $quality_step = -1;
}