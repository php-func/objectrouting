<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-08
 * Time: 22:00
 */

class IsString
{
    public function __construct($string)
    {
        $IsString = is_string($string) && strlen($string)>1;
        if(!$IsString){
            throw new Exception('IsString');
        }
    }
}