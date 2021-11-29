<?php

declare(strict_types=1);

namespace Coffee;

use Coffee\Controller\ControllerInterface;
use Coffee\Controller\NoRoute;

class DefaultRouter implements RouterInterface
{
    public function match(): ?ControllerInterface
    {
        return new NoRoute();
    }
}