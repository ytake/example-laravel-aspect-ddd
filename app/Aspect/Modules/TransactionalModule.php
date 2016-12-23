<?php
declare (strict_types=1);

namespace App\Aspect\Modules;

use App\AppService\MyTaskApplicationService;
use Ytake\LaravelAspect\Modules\TransactionalModule as PackageTransactionalModule;

/**
 * Class TransactionalModule
 */
class TransactionalModule extends PackageTransactionalModule
{
    /** @var array */
    protected $classes = [
        MyTaskApplicationService::class
    ];
}
