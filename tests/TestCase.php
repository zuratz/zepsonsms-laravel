<?php

namespace NotificationChannels\NextSms\Tests;

use NotificationChannels\NextSms\NextSmsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            NextSmsServiceProvider::class,
        ];
    }
}
