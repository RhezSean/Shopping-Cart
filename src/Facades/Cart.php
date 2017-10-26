<?php
namespace Gloudemans\Shoppingcart\Facades;

use Illuminate\Support\Facades\Facade;

class Cart extends Facade {
    /**
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cart';
    }
}
