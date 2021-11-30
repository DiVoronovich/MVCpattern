<?php

declare(strict_types=1);

namespace Coffee\Controller;

use Coffee\Model\DB\View;
use Coffee\Model\ViewDB;
use Exception;

class CategoryOfArticle implements ControllerInterface
{
    /**
     * @throws Exception
     * @return void
     */
    public function action(): void
    {
        echo "I'm from CategoryOfArticleController <br>";
        $sql = 'SELECT name_of_category FROM categories';
        $categoriesList = View::execute($sql);
        $obj = new ViewDB();
        $obj->output($categoriesList, 'name_of_category');
    }
}