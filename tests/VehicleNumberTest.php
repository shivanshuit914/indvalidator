<?php

namespace IndValidator;

use PHPUnit\Framework\TestCase;

/**
 * Class VehicleNumberTest.
 *
 * @author        Shivanshu Patel <shivanshu.patel@worldfirst.com>
 * @copyright     2016 World First Ltd. All rights reserved
 */
class VehicleNumberTest extends TestCase
{
    public function testValidNumbers()
    {
        $this->assertTrue(VehicleNumber::isValid('GJ 07 AB 1234'));
        $this->assertTrue(VehicleNumber::isValid('MP 12 AB 1234'));
        $this->assertTrue(VehicleNumber::isValid('UT 32 DR 6423'));
        $this->assertTrue(VehicleNumber::isValid('AH 17 FT 0007'));
    }

    public function testInvalidNumbers()
    {
        $this->assertFalse(VehicleNumber::isValid('X 07 AB 1234'));
        $this->assertFalse(VehicleNumber::isValid('MP 132 AB 12334'));
        $this->assertFalse(VehicleNumber::isValid('DL 1 AB 12344'));
        $this->assertFalse(VehicleNumber::isValid('L 1 AB 12344'));
    }
}
