<?php

namespace Homework\Traits;

trait Singleton
{
    private static $object = null;

    private static function object()
    {
        if (self::$object === null) {
           self::$object = new self();
        }

        return self::$object;
    }

}