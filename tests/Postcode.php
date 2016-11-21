<?php

namespace IndValidator;

use PHPUnit\Framework\TestCase;

/**
 * Class PostCodeTest.
 *
 * @author        Shivanshu Patel <shivanshuit914@gmail.com>
 */
class PostcodeTest extends TestCase
{
    public function testValidPostcode()
    {
        $this->assertTrue(Postcode::isValid(387001));
        $this->assertTrue(Postcode::isValid(452006));
    }

    public function testInValidPostcode()
    {
        $this->assertFalse(Postcode::isValid(1231));
        $this->assertFalse(Postcode::isValid(12334));
        $this->assertFalse(Postcode::isValid('123A234'));
        $this->assertFalse(Postcode::isValid('BC'));
        $this->assertFalse(Postcode::isValid(000));
    }
}