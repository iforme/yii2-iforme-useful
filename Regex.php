<?php

namespace iforme\useful;

/**
 * This is just an example.
 */
class Regex
{
    /**
     * Return only integers from string
     * @param string $str
     * @return string Integers of string
     */
    public static function OnlyInteger($str)
    {
        return preg_replace("/[^0-9]/", "", $str);
    }
}
