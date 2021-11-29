<?php

declare(strict_types=1);

namespace Coffee;

use Coffee\Controller\ControllerInterface;

/**
 * Class Router
 *
 * Determine current action and executes it.
 */
class Router implements RouterInterface
{
    /**
     * @return object|null
     */
    public function match(): ?ControllerInterface
    {
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        $actionName = $routes[1] ?: 'Index';
        $controllerClass = sprintf('\Coffee\Controller\%s', ucfirst($actionName));
        if (class_exists($controllerClass)) {
            return new $controllerClass();
        }
        return null;
    }
}