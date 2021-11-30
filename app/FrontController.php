<?php

declare(strict_types=1);

namespace Coffee;

use Coffee\Controller\ControllerInterface;
use Exception;

class FrontController
{
    /**
     * @var RoutesPool
     */
    private RoutesPool $pool;

    /**
     * FrontController constructor
     */
    public function __construct()
    {
        $this->pool = new RoutesPool(
            [
                new Router(),
                new DefaultRouter(),
            ]
        );
    }

    /**
     * Selects the desired router
     *
     * @return void
     * @throws Exception
     */
    public function execute(): void
    {
        foreach ($this->pool->getList() as $route) {
            $controller = $route->match();
            if ($controller instanceof ControllerInterface) {
                break;
            }
        }
        $controller->action();
    }
}