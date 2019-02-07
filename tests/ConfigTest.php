<?php

namespace App;

class ConfigTest extends TestCase
{
    public function testCanRetrieveConfig()
    {
        $config = new Config();

        $this->assertEquals([
            'host' => 'example.host',
            'port' => 3306,
            'user' => 'example',
            'pass' => 'example',
        ], $config->dbConfig);
    }
}
