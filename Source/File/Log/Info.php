<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-08
 * Time: 21:44
 */

class SourceFileLogInfo
{
    public function __construct(SourceFile $source, DataFile $data)
    {
        $data = new DataFile();
        $path = '';
        new SourceFile(
            $path,
            $data
        );

    }

}