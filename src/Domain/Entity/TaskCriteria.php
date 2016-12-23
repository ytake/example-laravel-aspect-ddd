<?php
declare (strict_types=1);

namespace Acme\Domain\Entity;

use PHPMentors\DomainKata\Entity\CriteriaInterface;

/**
 * Class TaskCriteria
 */
abstract class TaskCriteria implements CriteriaInterface
{
    /**
     * @return array
     */
    abstract public function all(): array;
}
