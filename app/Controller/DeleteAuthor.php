<?php

declare(strict_types=1);

namespace Coffee\Controller;

use Coffee\Model\DB\Delete;
use Exception;

class DeleteAuthor implements ControllerInterface
{
    /**
     * Deletes author from id
     *
     * @throws Exception
     * @return void
     */
    public function action(): void
    {
        $route = explode('/', $_SERVER['REQUEST_URI']);
        $authorId = $route[3];
        $sql = 'DELETE FROM authors WHERE authors.id = ' . $authorId . ';';
        Delete::execute($sql);
        header('Location: http://localhost/');
    }
}