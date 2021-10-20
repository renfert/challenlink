<?php

namespace App\Traits;

use App\Commands\ChangeQualityCommand;
use App\Product;

/**
 * Trait Expires
 *
 * @package App\Traits
 */
trait Expires
{
    /**
     * Changes the quality to 0 if product is after sale
     */
    public function expiresAfterSale()
    {
        if ($this->isAfterSale())
        {
            /* @var $this Product */
            (new ChangeQualityCommand($this))->setQuality(0)->execute();
        }
        return null;
    }
}