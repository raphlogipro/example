<?php

namespace Logipro\Bundle\ExampleBundle\Tests;

use PHPUnit\Framework\TestCase;
use Logipro\Bundle\ExampleBundle\Services\FooServices;

class FooServicesTest extends TestCase
{
    public function testMustObtainASuccessWhenParamisEqualFoo()
    {
        $fooServices = new FooServices();

        $this->assertEquals(true, $fooServices->verif('foo'));
    }

    public function testMustObtainAnErrorWhenParamisEqualBar()
    {
        $fooServices = new FooServices();

        $this->assertEquals(false, $fooServices->verif('bar'));
    }
}

