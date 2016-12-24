<?php
declare (strict_types=1);

namespace Acme\Domain\Entity;

use Acme\Domain\ValueObject\TaskStatus;
use PHPMentors\DomainKata\Entity\EntityInterface;

/**
 * Class Task
 */
final class Task implements EntityInterface
{
    /** @var int */
    private $id;

    /** @var string */
    private $taskName;

    /** @var TaskStatus  */
    private $taskStatus;

    /**
     * Task constructor.
     *
     * @param int        $id
     * @param string     $taskName
     * @param TaskStatus $taskStatus
     */
    public function __construct(int $id, string $taskName, TaskStatus $taskStatus)
    {
        $this->id = $id;
        $this->taskName = $taskName;
        $this->taskStatus = $taskStatus;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTaskName(): string
    {
        return $this->taskName;
    }

    /**
     * @return TaskStatus
     */
    public function getTaskStatus(): TaskStatus
    {
        return $this->taskStatus;
    }
}
