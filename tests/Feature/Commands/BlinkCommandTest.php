<?php

namespace ProjectRebel\Blink\Tests\Feature\Commands;

use ProjectRebel\Blink\Tests\TestCase;

class BlinkCommandTest extends TestCase
{
    public function testTheCommandWorks()
    {
        $this->artisan('blink')->assertExitCode(0);
    }
}