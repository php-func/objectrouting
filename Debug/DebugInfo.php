<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-07
 * Time: 00:29
 */
class DebugInfo
{
    public function __construct($txt)
    {
        //new SourceFileLogInfo($txt);
        echo $txt;
        echo '<br>';
        file_put_contents('log.info.txt', $txt);
    }
}