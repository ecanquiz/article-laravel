<?php

namespace App\Utils;

class ArrayTypeString
{

    public static function execute(Array $array, Bool $obj = false ): string
    {   
        if (!$obj) {
            return 'ARRAY[' . implode(',', array_map(function($string) {
              return "'$string'"; // Make sure to wrap each STR in single quotes
            }, $array)) . ']';
        } else {
            return '{' . implode(',', $array) . '}';
            //return '{' . implode(',', array_map(function($string) {
            //  return "'$string'"; // Make sure to wrap each STR in single quotes
            //}, $array)) . '}';
        }
    }
}