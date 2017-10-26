<?php

namespace Gloudemans\Shoppingcart;

use Illuminate\Support\Collection;

class CartItemOptions extends Collection
{
    /**
     *
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->get($key);
    }
}