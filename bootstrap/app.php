<?php

require_once __DIR__.'/../vendor/autoload.php';

try {
    Dotenv\Dotenv::create(dirname(__DIR__))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}
