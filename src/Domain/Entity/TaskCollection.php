<?php
declare (strict_types=1);

namespace Acme\Domain\Entity;

use Acme\Domain\ValueObject\TaskStatus;
use PHPMentors\DomainKata\Entity\EntityInterface;
use PHPMentors\DomainKata\Entity\EntityCollectionInterface;

/**
 * Class TaskCollection
 */
class TaskCollection implements EntityCollectionInterface
{
    /** @var array */
    protected $tasks;

    /**
     * TaskCollection constructor.
     *
     * @param array $tasks
     */
    public function __construct(array $tasks = [])
    {
        $this->tasks = $tasks;
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->tasks);
    }

    public function add(EntityInterface $entity)
    {
        // TODO: Implement add() method.
    }

    public function get($key)
    {
        // TODO: Implement get() method.
    }

    public function remove(EntityInterface $entity)
    {
        // TODO: Implement remove() method.
    }

    /**
     * @return Task[]
     */
    public function toArray(): array
    {
        $entities = [];
        foreach ($this->tasks as $task) {
            $entities[] = new Task($task['id'], $task['task_name'], new TaskStatus($task['task_status']));
        }

        return $entities;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->tasks);
    }
}
