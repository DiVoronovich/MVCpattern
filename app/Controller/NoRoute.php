<?php

declare(strict_types=1);

namespace Coffee\Controller;

/**
 * Class NoRoute
 *
 * Executing when described page is not found.
 */
class NoRoute implements ControllerInterface
{
    /**
     * @return void
     */
    public function action(): void
    {
        try {
            echo "No such route. Correct it, please.";
        } catch (\Exception $e) {
            echo $e;
        }
    }
}