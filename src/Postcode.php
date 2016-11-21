<?php

namespace IndValidator;

/**
 * Class Postcode.
 *
 * @author        Shivanshu Patel <shivanshuit914@gmail.com>
 */
final class Postcode
{
    /**
     * @param int|string $postcode
     *
     * @return bool
     */
    public static function isValid($postcode)
    {
        return !empty(preg_match('^[1-9][0-9]{5}$^', $postcode));
    }
}
