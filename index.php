<?php

define('ROOT', __DIR__);

# Includes functions
require ROOT . '/helpers/functions.php';


// Autoloading
require ROOT . '/vendor/autoload.php';



$file = new \Framework\FileSytem(ROOT); /* debug($file); */

$path = $file->to('/resources/views/posts/index.php');

require ROOT .'/resources/views/posts/index.php';
// require $path;