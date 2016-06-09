<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-06
 * Time: 23:45
 */

class ObjectHttpRequest
{
    public function __construct()
    {
        $param = $_REQUEST;
        $txt = 'TODO add:' . $param;
        var_dump($txt);
    }
}