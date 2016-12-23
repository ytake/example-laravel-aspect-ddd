<?php
declare (strict_types=1);

namespace App\DataAccess;

use Acme\Domain\Entity\TaskCriteria;

/**
 * Class TaskArrayStorage
 */
class TaskArrayStorage extends TaskCriteria
{
    /**
     * @return array
     */
    public function all(): array
    {
        return [
            [
                'id'          => 1,
                'task_name'   => 'testing',
                'task_status' => 'complete',
            ],
            [
                'id'          => 2,
                'task_name'   => 'development',
                'task_status' => 'wip',
            ],
            [
                'id'          => 3,
                'task_name'   => 'review',
                'task_status' => 'todo',
            ],
            [
                'id'          => 4,
                'task_name'   => 'deploy',
                'task_status' => 'todo',
            ],
        ];
    }

    /**
     * @throws \Exception
     */
    public function error()
    {
        throw new \Exception('must throw');
    }
}
