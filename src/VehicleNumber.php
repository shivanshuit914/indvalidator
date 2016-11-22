<?php

namespace IndValidator;

/**
 * Class VehicleNumber.
 *
 * @author        Shivanshu Patel <shivanshu.patel@worldfirst.com>
 * @copyright     2016 World First Ltd. All rights reserved.
 */
final class VehicleNumber
{
    /**
     * @param string $registrationNumber
     *
     * @return bool
     */
    public static function isValid($registrationNumber)
    {
        return !empty(preg_match('^[A-Z]{2}\s[0-9]{2}\s[A-Z]{2}\s[0-9]{4}$^', $registrationNumber));
    }
}