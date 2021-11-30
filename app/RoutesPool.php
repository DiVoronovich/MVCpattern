<?php

declare(strict_types=1);

namespace Coffee;

use Exception;

class RoutesPool implements PoolInterface
{
    /**
     * @var RouterInterface[]
     */
    private array $routes;

    /**
     * @param RouterInterface[] $routes
     */
    public function __construct(array $routes = [])
    {
        $this->routes = $routes;
    }

    /**
     * @return RouterInterface[]
     * @throws Exception
     */
    public function getList(): array
    {
        foreach ($this->routes as $route) {
            if (!($route instanceof RouterInterface)) {
                throw new Exception();
            }
        }
        return $this->routes;
    }
}