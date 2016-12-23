<?php
declare (strict_types=1);

namespace App\Aspect\Modules;

use App\AppService\MyTaskApplicationService;
use Ytake\LaravelAspect\Modules\CacheableModule as PackageCacheableModule;

/**
 * Class CacheableModule
 */
class CacheableModule extends PackageCacheableModule
{
    /** @var array */
    protected $classes = [
        MyTaskApplicationService::class
    ];
}
