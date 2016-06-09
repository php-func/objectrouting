<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-08
 * Time: 21:45
 */

class SourceFileLogError extends Source
{
    public function __construct($txt)
    {
        new SourceFile('log.error.txt', $txt);
        file_put_contents('log.info.txt', $txt);
    }
}