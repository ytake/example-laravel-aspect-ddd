<?php
declare (strict_types = 1);

namespace Acme\Domain\Specification;

use Acme\Domain\Entity\TaskCriteria;
use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Entity\CriteriaInterface;
use PHPMentors\DomainKata\Specification\SpecificationInterface;
use PHPMentors\DomainKata\Repository\Operation\CriteriaBuilderInterface;

/**
 * Class TaskSpecification
 */
class TaskSpecification implements SpecificationInterface, CriteriaBuilderInterface
{
    /** @var TaskCriteria */
    protected $criteria;

    /**
     * @param EntityInterface $entity
     */
    public function isSatisfiedBy(EntityInterface $entity)
    {
        // TODO: Implement isSatisfiedBy() method.
    }

    /**
     * {@inheritdoc}
     */
    public function build(): CriteriaInterface
    {
        return $this->criteria;
    }

    /**
     * @param TaskCriteria $criteria
     */
    public function criteria(TaskCriteria $criteria)
    {
        $this->criteria = $criteria;
    }
}
