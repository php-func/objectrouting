<?php

/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-07
 * Time: 00:40
 */
class SourceFile extends Source
{
    /** @var DataFileMime */
    //public $mime;

    /** @var DateCreate */
    //public $path;

    public function __construct(DataPath $path, DataText $text)
    {
        //'log.error.txt'
        try {
            IsStringNotEmpty($path->toString());
            IsStringNotEmpty($text->toString());
            file_put_contents($path->toString(), $text->toString());
        } catch (Exception $e) {
            throw new Exception('SourceFileSave');
        }

    }
}