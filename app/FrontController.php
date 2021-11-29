<?php

declare(strict_types=1);

namespace Coffee;

use Coffee\Controller\ControllerInterface;

class FrontController
{
    /**
     * Selects the desired router
     *
     * @return void
     */
    public function execute(): void
    {
        $routes = [
            new Router,
            new DefaultRouter,
        ];
        foreach ($routes as $route) {
            $controller = $route->match();
            if ($controller instanceof ControllerInterface) {
                break;
            }
        }
        $controller->action();
    }
}