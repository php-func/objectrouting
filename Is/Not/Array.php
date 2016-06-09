<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-09
 * Time: 21:42
 */

class IsNotArray
{
    public function __construct($string)
    {
        $IsArrayNotEmpty = !is_array($string);
        if(!$IsArrayNotEmpty){
            throw new Exception('IsNotArray');
        }
    }
}