<?php

namespace Logipro\Bundle\ExampleBundle\Services;

class FooServices
{
    public function verif(string $param)
    {
        if ($param !== 'foo') {
            return false;
        }

        return true;
    }
}
