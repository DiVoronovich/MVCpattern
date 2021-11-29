<?php

declare(strict_types=1);

namespace Coffee;

use Coffee\Controller\SaveAuthor;
use Coffee\Controller\Article;
use Coffee\Controller\CreateAuthor;
use Coffee\Controller\CategoryOfArticle;
use Coffee\Controller\ControllerInterface;

class LongUrlRouter implements RouterInterface
{
    public function match(): ?ControllerInterface
    {
        $routes = explode('localhost/', $_SERVER['REQUEST_URI']);
        switch ($routes[0]) {
            case "/main/authors":
                return new CreateAuthor();
            case "/Author/Save":
                return new SaveAuthor();
            case "/main/articles":
                return new Article();
            case "/main/articles/categories":
                return new CategoryOfArticle();
        }
        return null;
    }
}