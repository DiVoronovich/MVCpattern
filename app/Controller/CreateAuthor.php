<?php

declare(strict_types=1);

namespace Coffee\Controller;

use Coffee\Render;
use Exception;

class CreateAuthor implements ControllerInterface
{
    /**
     * @throws Exception
     * @return void
     */
    public function action(): void
    {
        Render::renderPhtml('app/tpl/addAuthorForm.phtml');
    }
}