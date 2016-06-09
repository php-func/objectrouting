<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-08
 * Time: 21:43
 */

class SourceFileLog extends Source
{
    /** @var DataFileMime */
    public $mime;

    /** @var DateCreate */
    public $date;

    public function __construct(DataPath $path, DataFile $file)
    {
        (DataFile);
        file_put_contents('log.error.txt', $txt);
    }
}