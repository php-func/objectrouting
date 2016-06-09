<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-08
 * Time: 22:02
 */

class IsStringEmpty
{
    public function __construct($string)
    {
        $IsStringEmpty = is_string($string) && strlen($string)<1;
        if(!$IsStringEmpty){
            throw new Exception('IsStringEmpty');
        }
    }
}