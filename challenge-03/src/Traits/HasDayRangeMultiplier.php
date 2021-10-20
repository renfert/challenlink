<?php

namespace App\Traits;

/**
 * Trait HasDayRangeMultiplier
 *
 * @package App\Traits
 */
trait HasDayRangeMultiplier
{
    /**
     * Finds a nearest multiplier
     *
     * @return int
     */
    protected function getMultiplier(): int
    {
        $multiplier = 1;

        foreach (static::$day_range_multiplier as $day => $dayMultiplier) {
            if ($this->getItem()->sellIn < $day) {
                $multiplier = $dayMultiplier;
            }
        }

        return $multiplier;
    }
}