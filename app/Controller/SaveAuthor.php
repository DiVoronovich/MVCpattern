<?php

declare(strict_types=1);

namespace Coffee\Controller;

use Coffee\Model\DB\Insert;
use Coffee\Model\DB\Update;
use Exception;

class SaveAuthor implements ControllerInterface
{
    /**
     * Adds author
     *
     * @return void
     * @throws Exception
     */
    public function action(): void
    {
        $route = explode('/', $_SERVER['REQUEST_URI']);
        $authorId = $route[3];
        if ($_POST['name']) {
            if ($authorId) {
                $sql = 'UPDATE authors SET author = \'' . $_POST['name'] . '\' WHERE authors.id = ' . $authorId . ';';
                Update::execute($sql);
            } else {
                $sql = 'INSERT authors (author, status_id, date_of_registration) VALUES (\'' . $_POST['name'] .  '\', 1, CURDATE())';
                Insert::execute($sql);
            }
        }
        header('Location: http://localhost/');
    }
}