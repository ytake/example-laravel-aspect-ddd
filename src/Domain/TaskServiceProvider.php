<?php
declare (strict_types=1);

namespace Acme\Domain;

use Illuminate\Support\ServiceProvider;
use Acme\Domain\Repository\TaskRepository;
use PHPMentors\DomainKata\Repository\RepositoryInterface;

/**
 * Class TaskServiceProvider
 */
final class TaskServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, TaskRepository::class);
    }
}
