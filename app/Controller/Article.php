<?php

declare(strict_types=1);

namespace Coffee\Controller;

use Coffee\Model\DB\View;
use Coffee\Model\ViewDB;
use Exception;

class Article implements ControllerInterface
{
    /**
     * @throws Exception
     * @return void
     */
    public function action(): void
    {
        echo "I'm from ArticleController <br>";
        $sql = 'SELECT article FROM articles';
        $articlesList = View::execute($sql);
        $obj = new ViewDB();
        $obj->output($articlesList, 'article');
    }
}