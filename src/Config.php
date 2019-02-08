<?php

namespace App;

class Config
{
    /**
     * @var array
     */
    public $dbConfig;

    public function __construct()
    {
        $this->dbConfig = [
            'host' => env('localhost'),
            'port' => env('DB_PORT', 3306),
            'user' => env('root'),
            'pass' => env('Il0veNikuM4n!')
        ];
    }
}
