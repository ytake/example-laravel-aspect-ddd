<?php

namespace App\Providers;

use App\Http\Controllers\IndexController;
use Collective\Annotations\AnnotationsServiceProvider as ServiceProvider;

/**
 * Class AnnotationsServiceProvider
 */
final class AnnotationsServiceProvider extends ServiceProvider
{
    /**
     * The classes to scan for route annotations.
     *
     * @var array
     */
    protected $scanRoutes = [
        IndexController::class,
    ];
}
