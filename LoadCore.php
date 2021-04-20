<?php

function autoLoader($className)
{
    $lastSlash = strpos($className, '\\');
    $className = substr($className, $lastSlash);
    $directory = str_replace('\\', '/', $className);
    $filename = __DIR__ . '/' . $directory . '.php';
    require_once($filename);
}
spl_autoload_register('autoLoader');
