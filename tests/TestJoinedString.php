<?php

declare(strict_types=1);

namespace OleksandrVart\fridayTest\Tests;

use OleksandrVart\fridayTest\JoinedString;
use PHPUnit\Framework\TestCase;

class TestJoinedString extends TestCase
{
    public function testJoined()
    {
        $obj = new JoinedString('-', [1,2,3]);
        $this->assertEquals(
            $obj->show(),
            '1-2-3'
        );
    }
}
