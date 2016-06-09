<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2016-06-06
 * Time: 23:19
 */

function my_autoloader($class) {
    include 'App/' . $class . '.php';
}

spl_autoload_register('my_autoloader');

