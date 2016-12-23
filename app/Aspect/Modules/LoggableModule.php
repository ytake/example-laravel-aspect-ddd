<?php
declare (strict_types=1);

namespace App\Aspect\Modules;

use App\AppService\MyTaskApplicationService;
use Ytake\LaravelAspect\Modules\LoggableModule as PackageLoggableModule;

/**
 * Class LoggableModule
 */
class LoggableModule extends PackageLoggableModule
{
    /** @var array */
    protected $classes = [
        MyTaskApplicationService::class
    ];
}
