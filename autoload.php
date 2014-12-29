<?php

require __DIR__.'/vendor/symfony/class-loader/Symfony/Component/ClassLoader/UniversalClassLoader.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$loader = new UniversalClassLoader();

$loader->registerNamespaces(array(
    'Hangman' => __DIR__.'/src',
    'Symfony' => __DIR__.'/vendor',
));

$loader->register();