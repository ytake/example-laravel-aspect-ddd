<?php
declare (strict_types = 1);

namespace App\AppService;

use Acme\Domain\Entity\Task;
use Acme\Domain\Service\MyTaskList;
use Acme\Domain\Specification\TaskSpecification;
use PHPMentors\DomainKata\Service\ServiceInterface;
use Ytake\LaravelAspect\Annotation\Cacheable;
use Ytake\LaravelAspect\Annotation\LogExceptions;
use Ytake\LaravelAspect\Annotation\Transactional;

/**
 * Class MyTaskApplicationService
 */
class MyTaskApplicationService
{
    /** @var ServiceInterface|MyTaskList */
    protected $service;

    /** @var TaskSpecification */
    protected $specification;

    /**
     * MyTaskApplicationService constructor.
     *
     * @param ServiceInterface  $service
     * @param TaskSpecification $specification
     */
    public function __construct(ServiceInterface $service, TaskSpecification $specification)
    {
        $this->service = $service;
        $this->specification = $specification;
    }

    /**
     * @Cacheable(cacheName="task:list")
     *
     * @return \Acme\Domain\Entity\Task[]
     */
    public function listOf(): array
    {
        return $this->service->listOf($this->specification);
    }

    /**
     * @LogExceptions
     * @Transactional
     *
     * @param Task $task
     * @throws \Exception
     */
    public function append(Task $task)
    {
        throw new \Exception('database error');
    }
}
