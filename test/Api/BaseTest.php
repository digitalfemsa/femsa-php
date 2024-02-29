<?php

namespace Femsa\Test\Api;

class BaseTest
{
    public static string $host;
}
BaseTest::$host = getenv('BASE_PATH') ?: 'localhost:3000';
