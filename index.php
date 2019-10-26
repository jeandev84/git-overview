<?php

define('ROOT', __DIR__);

# Includes functions
require ROOT . '/helpers/functions.php';


# To add autoloading composer

# Load classes
require ROOT .'/src/FileSytem.php';


$file = new \Framework\FileSytem(ROOT);

debug($file);