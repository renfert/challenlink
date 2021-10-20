<?php

namespace App;

/**
 * Class Item
 *
 * @package \GildedRose
 */
class Item
{
    public $name;

    public $sellIn;

    public $quality;

    public function __construct($name, $quality, $sellIn )
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
        
    }

    public function __toString()
    {
        return "{$this->name}, {$this->sellIn}, {$this->quality}";
    }

    public function tick(){

        $items =[];

        array_push($items, $this);
   
        $productFactoryRegistry = new \App\ProductFactoryRegistry();
        
        $productFactoryRegistry->register(\App\Products\RegularProduct::class);
        $productFactoryRegistry->register(\App\Products\Sulfuras::class);
        $productFactoryRegistry->register(\App\Products\BackstagePass::class);
        $productFactoryRegistry->register(\App\Products\Conjured::class);
        $productFactoryRegistry->register(\App\Products\AgedBrie::class);
        
        $productFactory = new \App\ProductFactory($productFactoryRegistry);
        
        $gildedRose = new \App\GildedRose($items, $productFactory);
        
        $gildedRose = $gildedRose->updateQuality();
    }
}