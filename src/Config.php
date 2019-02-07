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
            'host' => env('DB_HOST'),
            'port' => env('DB_PORT', 3306),
            'user' => env('DB_USER'),
            'pass' => env('DB_PASS')
        ];
    }
}
