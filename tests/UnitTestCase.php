<?php

namespace Mnabialek\LaravelVersion\Tests;

use Mockery;
use PHPUnit\Framework\TestCase;

class UnitTestCase extends TestCase
{
    public function tearDown()
    {
        Mockery::close();
    }
}
