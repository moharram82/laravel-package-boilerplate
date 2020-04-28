<?php

namespace Moharram82\PackageName;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Moharram82\PackageName\Skeleton\SkeletonClass
 */
class PackageNameFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'package-name';
    }
}
