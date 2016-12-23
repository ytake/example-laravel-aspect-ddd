<?php
declare (strict_types=1);

namespace Acme\Domain\Service;

use Acme\Domain\Repository\TaskRepository;
use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Service\ServiceInterface;
use PHPMentors\DomainKata\Repository\RepositoryInterface;
use PHPMentors\DomainKata\Repository\Operation\CriteriaBuilderInterface;

/**
 * Class TaskList
 */
class MyTaskList implements ServiceInterface
{
    /** @var RepositoryInterface|TaskRepository */
    protected $repository;

    /**
     * MyTaskList constructor.
     *
     * @param RepositoryInterface $repository
     */
    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param CriteriaBuilderInterface $criteriaBuilder
     *
     * @return \Acme\Domain\Entity\Task[]|array
     */
    public function listOf(CriteriaBuilderInterface $criteriaBuilder)
    {
        return $this->repository->queryBy($criteriaBuilder);
    }

    /**
     * @param EntityInterface $entity
     */
    public function append(EntityInterface $entity)
    {
        $this->repository->add($entity);
        // event and more
    }
}
