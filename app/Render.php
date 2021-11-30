<?php

declare(strict_types=1);

namespace Coffee;

class Render
{
    /**
     * View page
     *
     * @param string $template path to the template
     * @return void
     */
    public static function renderPhtml(string $template): void
    {
        ob_start();
        include_once $template;
        echo ob_get_clean();
    }
}