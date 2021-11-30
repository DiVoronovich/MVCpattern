<?php

declare(strict_types=1);

namespace Coffee;

use Coffee\Controller\ControllerInterface;

/**
 * @api
 *
 * Interface RouterInterface
 */
interface RouterInterface
{
    /**
     * @return void
     */
    public function match(): ?ControllerInterface;
}