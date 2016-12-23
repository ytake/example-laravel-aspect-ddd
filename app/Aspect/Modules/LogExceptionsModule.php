<?php
declare (strict_types=1);

namespace App\Aspect\Modules;

use App\AppService\MyTaskApplicationService;
use Ytake\LaravelAspect\Modules\LogExceptionsModule as PackageLogExceptionsModule;

/**
 * Class LogExceptionsModule
 */
class LogExceptionsModule extends PackageLogExceptionsModule
{
    /** @var array */
    protected $classes = [
        MyTaskApplicationService::class
    ];
}
