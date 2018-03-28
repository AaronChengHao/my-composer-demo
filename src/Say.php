<?php

namespace Aaron;

class Say
{

    public static function __callStatic($name, $arguments)
    {
        return "{$name}" . implode('-', $arguments);
    }

    public function __call($name, $arguments)
    {
        return "{$name}" . implode('-', $arguments);
    }
}
