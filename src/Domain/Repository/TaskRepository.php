<?php
declare (strict_types=1);

namespace Acme\Domain\Repository;

use Acme\Domain\Entity\TaskCriteria;
use Acme\Domain\Entity\TaskCollection;
use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Repository\RepositoryInterface;
use PHPMentors\DomainKata\Repository\Operation\CriteriaBuilderInterface;

/**
 * Class TaskRepository
 */
class TaskRepository implements RepositoryInterface
{
    /**
     * @param EntityInterface $entity
     */
    public function add(EntityInterface $entity)
    {
        // TODO: Implement add() method.
    }

    /**
     * @param EntityInterface $entity
     */
    public function remove(EntityInterface $entity)
    {
        // TODO: Implement remove() method.
    }

    /**
     * @param CriteriaBuilderInterface $criteria
     *
     * @return \Acme\Domain\Entity\Task[]|array
     */
    public function queryBy(CriteriaBuilderInterface $criteria)
    {
        /** @var TaskCriteria $criteria */
        $criteria = $criteria->build();

        return (new TaskCollection($criteria->all()))->toArray();
    }
}
