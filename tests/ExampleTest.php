<?php

namespace Moharram82\PackageName\Tests;

use Orchestra\Testbench\TestCase;
use Moharram82\PackageName\PackageNameServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PackageNameServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
