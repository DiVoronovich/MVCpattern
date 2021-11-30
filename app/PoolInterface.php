<?php
declare(strict_types=1);

namespace Coffee;

/**
 * Interface PoolInterface
 *
 * Container for available routers
 */
interface PoolInterface
{
    /**
     * Retrieves a list of available routers
     *
     * @return RouterInterface[]
     */
    public function getList(): array;
}