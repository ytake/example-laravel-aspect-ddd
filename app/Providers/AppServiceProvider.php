<?php

namespace App\Providers;

use Acme\Domain\Service\MyTaskList;
use Acme\Domain\Specification\TaskSpecification;
use App\DataAccess\TaskArrayStorage;
use Illuminate\Support\ServiceProvider;
use App\AppService\MyTaskApplicationService;
use PHPMentors\DomainKata\Service\ServiceInterface;

/**
 * Class AppServiceProvider
 */
final class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->when(MyTaskApplicationService::class)
            ->needs(ServiceInterface::class)
            ->give(MyTaskList::class);

        $this->app->resolving(TaskSpecification::class, function (TaskSpecification $specification) {
            $specification->criteria(new TaskArrayStorage);

            return $specification;
        });
    }
}
