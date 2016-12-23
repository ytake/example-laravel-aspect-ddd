<?php
declare (strict_types=1);

namespace App\Http\Controllers;

use App\AppService\MyTaskApplicationService;
use Illuminate\Routing\Controller as BaseController;

/**
 * Class Controller
 * @Middleware("web")
 */
class IndexController extends BaseController
{
    /** @var MyTaskApplicationService  */
    protected $service;

    /**
     * IndexController constructor.
     *
     * @param MyTaskApplicationService $service
     */
    public function __construct(MyTaskApplicationService $service)
    {
        $this->service = $service;
    }

    /**
     * @Get("/", as="index")
     */
    public function index()
    {
        // example
        // $this->service->append(new Task(1, 'アドベントカレンダー', new TaskStatus('書く')));
        dd($this->service->listOf());
    }
}
