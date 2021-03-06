<?php

namespace Trikoder\JsonApiBundle\Config\Traits;

use Closure;

trait LoadLazyPropertyTrait
{
    /**
     * @param $property
     */
    private function lazyLoadProperty($property)
    {
        $value = $this->$property;

        if (true === ($value instanceof Closure)) {
            $this->$property = $value();
        }

        return $this->$property;
    }
}
