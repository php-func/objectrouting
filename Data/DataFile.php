<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-07
 * Time: 00:45
 */

class DataFile extends Data
{
    /** @var DataFileName */
    public $name;

    /** @var Data */
    public $data;
    
    public function __construct($txt)
    {
        file_put_contents('log.error.txt', $txt);
    }   
}