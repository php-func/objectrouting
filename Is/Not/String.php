<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-09
 * Time: 21:42
 */

class IsNotString
{
    public function __construct($string)
    {
        $IsString = !is_string($string);
        if(!$IsString){
            throw new Exception('IsNotString');
        }
    }
}