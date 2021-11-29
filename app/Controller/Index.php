<?php

declare(strict_types=1);

namespace Coffee\Controller;

use Coffee\Render;
use Exception;

class Index implements ControllerInterface
{
    /**Shows list of author
     *
     * @throws Exception
     * @return void
     */
    public function action(): void
    {
        Render::renderPhtml('app/tpl/authorForm.phtml');
    }
}