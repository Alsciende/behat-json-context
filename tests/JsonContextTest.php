<?php

namespace Tests;

use Alsciende\Behat\JsonContext;
use PHPUnit\Framework\TestCase;

class JsonContextTest extends TestCase
{
    public function testCreation()
    {
        $objectUnderTest = new JsonContext();
        $this->assertInstanceOf('Alsciende\Behat\JsonContext', $objectUnderTest);
    }
}
