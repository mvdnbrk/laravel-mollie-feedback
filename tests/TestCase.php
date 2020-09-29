<?php

namespace Mvdnbrk\MollieFeedback\Tests;

use Mvdnbrk\MollieFeedback\MollieFeedbackServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        //
    }

    protected function getPackageProviders($app)
    {
        return [
            MollieFeedbackServiceProvider::class,
        ];
    }
}
