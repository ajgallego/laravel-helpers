<?php namespace Ajgallego\LaravelHelpers\Datatypes;

/**
* String helper class
*/
class HelpString
{
    /**
    * Test if a string (haystack) starts with a substring (needle)
    */
    public static function startsWith( $_haystack, $_needle )
    {
        return !strncmp( $_haystack, $_needle, strlen($_needle) );
    }

    /**
    * Test if a string (haystack) ends with a substring (needle)
    */
    public static function endsWith( $_haystack, $_needle )
    {
        $length = strlen($_needle);
        if ($length == 0) {
            return true;
        }

        return ( substr($_haystack, -$length) === $_needle );
    }

}