<?php

declare(strict_types=1);

namespace Coffee\Controller;

use Coffee\Render;
use Exception;

class EditAuthor implements ControllerInterface
{
    /**
     * Edits author from id
     *
     * @return void
     * @throws Exception
     */
    public function action(): void
    {
        Render::renderPhtml('app/tpl/editAuthorForm.phtml');
    }
}