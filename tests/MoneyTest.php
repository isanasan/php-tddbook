<?php

namespace isanasan\phptddbook;

final class MoneyTest extends TestCase
{
    public function testMoney() {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertEquals(10,$five->amount);
        $five->times(3);
        $this->assertEquals(15,$five->amount);

    }
}
