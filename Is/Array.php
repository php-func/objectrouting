<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-08
 * Time: 22:21
 */


class IsArray
{
    public function __construct($string)
    {
        $IsArrayNotEmpty = is_array($string) && count($string)>0;
        if(!$IsArrayNotEmpty){
            throw new Exception('IsArray');
        }
    }
}