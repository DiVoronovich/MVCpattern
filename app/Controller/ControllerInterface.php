<?php

declare(strict_types=1);

namespace Coffee\Controller;

/**
 * @api
 *
 * Interface ControllerInterface
 */
interface ControllerInterface
{
    /**
     * @return void
     */
    public function action(): void;
}