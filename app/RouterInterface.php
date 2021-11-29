<?php

declare(strict_types=1);

namespace Coffee;

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
    public function match(): ?object;
}