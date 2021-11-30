<?php

declare(strict_types=1);

namespace Coffee;

use Coffee\Controller\ControllerInterface;

class FrontController
{
    /**
     * @var object[]
     */
    private array $routes;

    /**
     * @param object[] $routes
     */
    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }
    /**
     * Selects the desired router
     *
     * @return void
     */
    public function execute(): void
    {
        foreach ($this->routes as $route) {
            $controller = $route->match();
            if ($controller instanceof ControllerInterface) {
                break;
            }
        }
        $controller->action();
    }
}