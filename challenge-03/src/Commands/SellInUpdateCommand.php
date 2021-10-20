<?php

namespace App\Commands;

use App\Command;
use App\Product;

/**
 * Class SellInUpdateCommand
 *
 * Decreases Sell In value of Product as the day passes
 *
 * @package \GildedRose\Commands
 */
class SellInUpdateCommand extends Command
{
    /**
     * @return void
     */
    public function execute()
    {
        $this->product->getItem()->sellIn--;
        return null;
    }
}