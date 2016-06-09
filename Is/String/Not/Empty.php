<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-08
 * Time: 22:02
 */

class IsStringNotEmpty
{
    public function __construct($txt)
    {
        file_put_contents('log.error.txt', $txt);
    }
}